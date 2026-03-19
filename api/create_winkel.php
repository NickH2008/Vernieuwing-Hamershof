<?php

global $pdo;
require "../config/db_config.php";
session_start();
header("Content-Type: application/json");

$winkelnaam = isset($_POST['winkelnaam']) ? $_POST['winkelnaam'] : '';

if (empty($winkelnaam)) {
    echo json_encode([
        "status" => "success",
        "message" => "Winkel succesvol toegevoegd"
    ]);
}

$stmt = $pdo->prepare("INSERT INTO winkels (winkelnaam, categorie, image) VALUES (?, ?, ?)");
$stmt->execute([$winkelnaam, $_POST['category'], $_FILES['picture']['name']]);
echo json_encode(["status" => "success"]);
