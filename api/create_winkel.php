<?php

global $pdo;
require "../config/db_config.php";
session_start();
header("Content-Type: application/json");

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["status" => "error"]);
    exit;
}

$title = isset($_POST['title']) ? $_POST['title'] : '';
$is_public = isset($_POST['is_public']) ? $_POST['is_public'] : 0;

if (empty($title)) {
    echo json_encode(["status" => "error", "message" => "Titel ontbreekt"]);
    exit;
}

$stmt = $pdo->prepare("INSERT INTO winkels (id, winkelnaam, categorie, image) VALUES (?, ?, ?)");
$stmt->execute([$_SESSION['user_id'], $title, $is_public]);

echo json_encode(["status" => "success"]);
