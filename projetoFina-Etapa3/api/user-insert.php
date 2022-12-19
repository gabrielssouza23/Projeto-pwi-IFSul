<?php

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

$name = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$query = "INSERT INTO `users`(`nome`, `email`, `senha`, `id`) VALUES ('$name', '$email', '$senha', null)";
$stmt = $conn->query($query);