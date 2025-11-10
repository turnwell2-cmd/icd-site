<?php
// includes/db_connect.php
// Creates/opens the SQLite DB and ensures the tracking table exists.
// Use this via: include __DIR__ . '/db_connect.php';

$db_path = __DIR__ . '/../db/tracking.db';

// Ensure db folder exists and is writable
$db_dir = dirname($db_path);
if (!is_dir($db_dir)) {
    if (!mkdir($db_dir, 0777, true) && !is_dir($db_dir)) {
        die("Failed to create DB directory: $db_dir");
    }
}

// Connect to SQLite
try {
    $db = new PDO('sqlite:' . $db_path);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create tracking table if it doesn't exist
    $db->exec("CREATE TABLE IF NOT EXISTS tracking (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        tracking_number TEXT UNIQUE,
        customer_name TEXT,
        origin TEXT,
        destination TEXT,
        status TEXT,
        notes TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );");
} catch (PDOException $e) {
    // Don't reveal sensitive info in production; this is helpful for debugging
    die('Database connection failed: ' . $e->getMessage());
}
