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


$email = $_POST["login"];
$password = $_POST["senha"];

$query = "SELECT * 
          FROM users 
          WHERE email LIKE '$email' AND 
                senha LIKE '$password'";

$stmt = $conn->query($query);

if($stmt->rowCount() == 1){
    $row = $stmt->fetch();
    $_SESSION["id"] = $row->id;
    $_SESSION["nome"] = $row->nome;
    $_SESSION["email"] = $row->email;
    $response = [
        "type" => "success",
        "message" => "Olá, {$row->nome}! "
    ];
    echo json_encode($response);
} else{

    $response = [
        "type" => "error",
        "message" => "Email ou Senha não cadastrados"
    ];
    echo json_encode($response);
}