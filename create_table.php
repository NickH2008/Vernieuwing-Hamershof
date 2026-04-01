<?php

require_once 'config/db_config.php';

$config = require 'config/db_config.php';

try {
    $pdo = new PDO("mysql:host={$config['servername']};dbname={$config['dbname']};charset=utf8mb4", $config['username'], $config['password']);

    $sql = "CREATE TABLE IF NOT EXISTS rental_requests (
        id INT AUTO_INCREMENT PRIMARY KEY,
        contact_name VARCHAR(255) NOT NULL,
        contact_email VARCHAR(255) NOT NULL,
        contact_phone VARCHAR(20) NOT NULL,
        shop_name VARCHAR(255) NOT NULL,
        shop_category VARCHAR(100) NOT NULL,
        shop_description TEXT,
        preferred_size INT NULL,
        preferred_location VARCHAR(50),
        start_date DATE NULL,
        business_plan_path VARCHAR(500),
        logo_path VARCHAR(500),
        terms_accepted TINYINT(1) NOT NULL DEFAULT 0,
        status ENUM('pending', 'reviewed', 'approved', 'rejected') DEFAULT 'pending',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        INDEX idx_status (status),
        INDEX idx_created_at (created_at)
    )";

    $pdo->exec($sql);
    echo "✅ Table 'rental_requests' created successfully!\n";

    // Check if table was created
    $stmt = $pdo->query("SHOW TABLES LIKE 'rental_requests'");
    if ($stmt->rowCount() > 0) {
        echo "✅ Table exists and is ready to use.\n";
    }

} catch (PDOException $e) {
    echo "❌ Error creating table: " . $e->getMessage() . "\n";
}