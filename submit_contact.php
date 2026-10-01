<?php
/**
 * submit_contact.php
 * Handles the contact form submission from Showroom.php (via fetch/AJAX),
 * validates the input, and stores it in the `contacts` table.
 * Always responds with JSON.
 */

header('Content-Type: application/json');
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed.']);
    exit;
}

// Accept either normal form-encoded POST or a JSON body.
$input = $_POST;
if (empty($input)) {
    $raw = file_get_contents('php://input');
    $decoded = json_decode($raw, true);
    if (is_array($decoded)) {
        $input = $decoded;
    }
}

$name    = trim($input['name']    ?? '');
$email   = trim($input['email']   ?? '');
$message = trim($input['message'] ?? '');

$errors = [];

if ($name === '' || mb_strlen($name) > 150) {
    $errors['name'] = 'Please enter a valid name (max 150 characters).';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 190) {
    $errors['email'] = 'Please enter a valid email address.';
}

if ($message === '' || mb_strlen($message) > 500) {
    $errors['message'] = 'Please enter a message (max 500 characters).';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

try {
    $pdo = get_db_connection();
    $stmt = $pdo->prepare(
    'INSERT INTO contact_submissions (name, email, message, ip_address, user_agent, status) 
     VALUES (:name, :email, :message, :ip, :user_agent, "new")'
);
$stmt->execute([
    ':name'    => $name,
    ':email'   => $email,
    ':message' => $message,
    ':ip'      => $_SERVER['REMOTE_ADDR'] ?? null,
    ':user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null,
]);

    echo json_encode([
        'success' => true,
        'message' => 'Message saved successfully.',
        'id'      => $pdo->lastInsertId(),
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Could not save your message. Please try again later.']);
}
