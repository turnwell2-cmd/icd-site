<?php
// Connect to SQLite
$db_file = __DIR__ . '/tracking.db';
$db = new PDO('sqlite:' . $db_file);
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
    email TEXT,
    notes TEXT,
    sender_name TEXT,
    sender_address TEXT,
    sender_city TEXT,
    sender_county TEXT,
    sender_country TEXT,
    sender_zip TEXT,
    receiver_name TEXT,
    receiver_address TEXT,
    receiver_city TEXT,
    receiver_county TEXT,
    receiver_country TEXT,
    receiver_zip TEXT,
    created_at TEXT
)");
