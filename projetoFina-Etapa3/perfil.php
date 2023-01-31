<?php
session_start();
$name = $_SESSION["nome"];
$email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./assets/styleLogin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./assets/perfil.js" async></script>
</head>
<body>
<div class="menu"></div>
    <div class ="perfil">
        <form id="profile-form">
            <img src="./img/horizontal_on_white_by_logaster-removebg-preview.png">
            <input type="text" id="nomePerfil" name="nome" value="<?= $name; ?>"><br><br>
            <input type="text" id="emailPerfil" name="email" value="<?= $email; ?>"><br><br>
            <input type="submit" id ="loginBtn" value="Salvar"><br><br>
            <a href="./home.php">Voltar</a>
            <div id="message">
                    <!-- Aqui vai a mensagem de retorno -->
            </div>
</div>
</form>
</body>
</html>
