<?php
// init_db.php - create the shipments table if it doesn't exist

try {
    $db = new PDO('sqlite:icd.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "
    CREATE TABLE IF NOT EXISTS shipments (
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
        status TEXT DEFAULT 'Created',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";

    $db->exec($sql);

    echo '✅ Database initialized successfully.';
} catch (PDOException $e) {
    echo '❌ Database initialization failed: ' . $e->getMessage();
}
