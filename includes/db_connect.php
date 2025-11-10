<?php
// includes/db_connect.php
// Connect to SQLite database and create table if it doesn't exist

$dbFile = __DIR__ . '/../icd_tracking.db';

try {
    $db = new PDO("sqlite:" . $dbFile);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create table if not exists
    $db->exec("
        CREATE TABLE IF NOT EXISTS tracking (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            tracking_number TEXT UNIQUE,
            customer_name TEXT,
            origin TEXT,
            destination TEXT,
            service TEXT,
            package_content TEXT,
            package_weight TEXT,
            declared_value TEXT,
            additional_services TEXT,
            third_party_account TEXT,
            status TEXT,
            notes TEXT,
            email TEXT,
            created_at TEXT DEFAULT CURRENT_TIMESTAMP
        )
    ");
} catch (PDOException $e) {
    die("DB connection failed: " . htmlspecialchars($e->getMessage()));
}
