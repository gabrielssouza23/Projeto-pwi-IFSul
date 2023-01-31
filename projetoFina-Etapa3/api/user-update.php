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

$name = $_POST["nome"];
$email = $_POST["email"];
$id = $_SESSION["id"];

$_SESSION["nome"] = $name;
$_SESSION["email"] = $email;

$query = "UPDATE users SET nome = '$name', email = '$email' WHERE id = $id";
$conn->query($query);
$response = [
    "type" => "success",
    "message" => "Usuário atualizado!"
];
echo json_encode($response);

