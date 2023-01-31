<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "bd-tintendo";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
];

$conn = new PDO(
    "mysql:host=$host;dbname=$database",
    $user,
    $password,
    $options
);

    $legenda = $_POST["addLeg"];
    $url = $_POST["addFoto"];
    $categoria = $_POST["addCategoria"];

    $query = "select * from images where url like $url";


    $query = "INSERT INTO `images`(`id`, `legenda`, `url`, `categoria`) VALUES (null,'$legenda','$url','$categoria')";


$stmt = $conn->query($query);
$response = [
    "type" => "success",
    "message" => "Postado!"
];
echo json_encode($response);
