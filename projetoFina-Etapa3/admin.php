<?php
    
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "bd-tintendo";
   
    $conn = new PDO(
        "mysql:host=$host;dbname=$database",
        $user,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]
    );

    include __DIR__ ."./source/helpers.php";
    
    $userList = getUsers($conn); 
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tintendo Gallery</title>
    <link rel="shortcut icon" href="./img/horizontal_on_white_by_logaster-removebg-preview_1__1_.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/styleLogin.css">
</head>
<body>
    <?php
    foreach($userList as $userListing){
        echo '<div class="menu"></div>
         <div class ="perfil">
            <form id="profile-form"'.$userListing->id.'>
                 <img src="./img/horizontal_on_white_by_logaster-removebg-preview.png">
                 <input type="text" id="nomePerfil" name="nomeRevisao" value="'.$userListing->nome.'"><br><br>
                 <input type="text" id="emailPerfil" name="emailRevisao" value="'.$userListing->email.'"><br><br>
                 <input type="text" id="idPerfil" name="idRevisao" value="'.$userListing->id.'"><br><br>
                 <input type="submit" id ="loginBtn" value="Salvar"><br><br>
                 <div id="message">
                         <!-- Aqui vai a mensagem de retorno -->
                 </div>';
     }
 
?>


<script>
    const message = document.querySelector("#message");
    const formUpdate = document.querySelector("#profile-form");
    formUpdate.addEventListener("submit", async (e) => {
        e.preventDefault();
        const dataUser = new FormData(formUpdate);
        const data = await fetch("http://localhost/gabrielsouzainf2am/projetoFina-Etapa3/api/admin-update.php",{
            method: "POST",
            body: dataUser,
        });
        const user = await data.json();
        console.log(user);
        message.textContent = user.message;
    });
</script>

</body>
</html>