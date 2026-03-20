<?php

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
        "message" => "Database connectie mislukt: " . $e->getMessage()
    ]);
    exit;
}
session_start();
header("Content-Type: application/json");

$winkelnaam = $_POST['winkelnaam'] ?? '';
$categorie = $_POST['category'] ?? '';
$image = $_FILES['picture']['name'] ?? '';

if (empty($winkelnaam)) {
    echo json_encode([
        "status" => "error",
        "message" => "Winkelnaam ontbreekt"
    ]);
    exit;
}

$stmt = $pdo->prepare("
    INSERT INTO winkels (winkelnaam, categorie, image)
    VALUES (?, ?, ?)
");

$stmt->execute([$winkelnaam, $categorie, $image]);

echo json_encode([
    "status" => "success",
    "message" => "Winkel toegevoegd"
]);