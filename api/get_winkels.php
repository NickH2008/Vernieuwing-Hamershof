<?php

header("Content-Type: application/json");

// DB config ophalen
$config = require "../config/db_config.php";

try {
    $pdo = new PDO(
        "mysql:host={$config['servername']};dbname={$config['dbname']};charset=utf8",
        $config['username'],
        $config['password']
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Database fout: " . $e->getMessage()
    ]);
    exit;
}

// Query uitvoeren
$stmt = $pdo->prepare("SELECT winkelnaam, categorie, image FROM winkels");
$stmt->execute();

// Alles ophalen
$winkels = $stmt->fetchAll(PDO::FETCH_ASSOC);

// JSON terugsturen
echo json_encode($winkels);