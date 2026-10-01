# Anto's Car Showroom — PHP + Database

Your full site (all 7 brand pages and their model-detail pages) has been converted from
`.html` to `.php`, with every internal link updated to match. The contact form on the
main page now saves submissions to a MySQL database instead of `localStorage`.

## What's in this zip
```
Showroom.php          Main landing page (contact form saves to the database)
index.php             Redirects to Showroom.php (so it works as the default page on most hosts)
config.php            Database connection settings — EDIT THIS
submit_contact.php    Backend endpoint the contact form submits to
schema.sql            Creates the database + contacts table
audi/, benz/, bmw/, ferrari/, koenigsegg/, lambo/, pagani/
                       Brand pages and model-detail pages (all .php now)
```

## Setup steps
1. Create the database and table:
   ```bash
   mysql -u root -p < schema.sql
   ```
2. Open `config.php` and set your real `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`.
3. Upload the whole folder to a PHP-enabled server (XAMPP/WAMP/MAMP `htdocs`, or any host with PHP 7.4+ and MySQL), keeping the folder structure intact.
4. Visit the site and submit the contact form — entries will appear in the `contacts` table.

## Viewing saved messages
```sql
USE anto_showroom;
SELECT * FROM contacts ORDER BY created_at DESC;
```

## Fixes made during conversion
A few pre-existing broken links in the original HTML were corrected so navigation works end-to-end:
- `ferrari/Ferrari.html` was renamed to `ferrari/ferrari.php` — the showroom page linked to a lowercase `ferrari.html`, which wouldn't have resolved on a case-sensitive server (most Linux hosts).
- The root-level `Pagani.html` (which linked back to `../Showroom.html`, meaning it belonged in a subfolder) was moved into `pagani/Pagani.php` to match the link used elsewhere.
- `pagani/pagani-huayra-details.html` linked back to a nonexistent `paganiModels.html`; this now correctly points to `Pagani.php`.

## Note on "related model" links
Several detail pages link to sibling models that weren't included in the files you provided (e.g. `mercedes-c63-details.php`, `koenigsegg-ccr-details.php`, `pagani-utopia-details.php`, `audi-etron-gt-details.php` cross-links to pages not in this set, etc.). These were already like that in the original HTML — the links are in place and will work as soon as you add those pages, but they'll 404 until then.

If you'd like, I can also build a simple `admin.php` page to list/search/delete contact submissions in the browser instead of using the MySQL CLI.
