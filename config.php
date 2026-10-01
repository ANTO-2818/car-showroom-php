<?php
/**
 * config.php
 * Database connection settings for Anto's Car Showroom.
 *
 * Update the four constants below with your actual database
 * credentials before deploying. Never commit real credentials
 * to a public repository — consider loading these from
 * environment variables in production.
 */
 
// ---- EDIT THESE VALUES ----
define('DB_HOST', 'localhost:8080');
define('DB_NAME', 'anto_showroom');
define('DB_USER', 'root');
define('DB_PASS', '');
// ----------------------------

define('DB_CHARSET', 'utf8mb4');

/**
 * Returns a shared PDO connection instance.
 * Uses exceptions for error mode so calling code can try/catch cleanly.
 */
function get_db_connection(): PDO {
    static $pdo = null;

    if ($pdo === null) {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            // In production, log this instead of exposing details to the client.
            http_response_code(500);
            die('Database connection failed: ' . $e->getMessage());
        }
    }

    return $pdo;
}
