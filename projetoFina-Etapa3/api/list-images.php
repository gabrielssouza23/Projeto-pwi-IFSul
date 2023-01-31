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
 

  function searchImg($conn, string $search){
    $search = $_POST['q']; 
    $query = "SELECT * FROM `images` WHERE categoria like '$search'";
    $stmt = $conn->query($query);
    return $stmt->fetchAll();
  }

  $images = searchImg($conn, $_POST["q"]);
  //var_dump($images);
  //var_dump($_POST);

  //echo json_encode($images);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <title>Tintendo Gallery</title>
    <link rel="shortcut icon" href="../img/horizontal_on_white_by_logaster-removebg-preview_1__1_.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="./assets/home.js" async></script>
    <script src="./assets/script.js" async></script>
 
</head>
<body>
  <header class="header">
  <nav class="nav">
      <div class="logo">
        <a href="../home.php"><img id="logo" src="../img/horizontal_on_white_by_logaster-removebg-preview.png"></a>
         <div id="welcome">
           <!-- Aqui vai a mensagem de retorno -->
        </div>  
      </div>
 
      <ul class="menu">
        <button id="home" onclick="goHome()">Home</button>
        <button id="adicionar">Adicionar</button>
        <button id="att" onclick="attPerfil()">Perfil</button>
        <button id="logout" onclick="deslogar()">Logout</button>
      </ul>
  </nav>
  </header>
  <main class="container">
    <?php
         foreach ($categoria as $categorias) {
         $value = random_int(1, 14);
         echo "<div class=\"item-{$value}\">
         <img class=\"img\" src=\"{$categorias->url}\">
         <p>{$categorias->legenda}</p>
         </div>";
 }
 ?> 
  </main>
  <script>

    </script>
</body>
</html>