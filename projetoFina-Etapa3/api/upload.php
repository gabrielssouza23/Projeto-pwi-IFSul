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

    $query = "INSERT INTO imagens (imagem) VALUES (LOAD_FILE('C:\wamp64\www\gabrielsouzainf2am\projetoFina-Etapa3\img\manoelGome.jpg'));";


$stmt = $conn->query($query);
