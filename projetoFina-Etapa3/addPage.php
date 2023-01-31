<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tintendo Gallery</title>
    <link rel="shortcut icon" href="./img/horizontal_on_white_by_logaster-removebg-preview_1__1_.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/styleLogin.css">
    <script src="./assets/script.js" async></script>
</head>
<body>
    <div class="menu"></div>
    <div class ="login">
        <form id="form-post">
            <img src="./img/horizontal_on_white_by_logaster-removebg-preview.png">
            <input type="text" size="50" id="addFoto" name="addFoto" placeholder=" URL Da Imagem"><br><br>
            <input type="text" size="50" id="addLeg" name="addLeg" placeholder=" Legenda Da Imagem"><br><br>
            <input type="text" size="50" id="addCategoria" name="addCategoria" placeholder=" Add A Categoria"><br><br>
            <input type="button" id ="preview" value="Preview"><br><br>
            <div id="previewDiv">

            </div>
            <input type="submit" id ="publicar" value="Publicar"><br><br>
            <a href="./home.php">Voltar</a>
            <div id="message">
                <!-- Aqui vai a mensagem de retorno -->
            </div>
        </form>
    </div>
</body>
</html>