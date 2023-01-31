<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <script src="./assets/register.js" async></script>
    <link rel="stylesheet" href="./assets/styleLogin.css">
</head>
<body>
    <div class="menu"></div>
    <div class ="login">
        <form id="register-form" method="post" novalidate>
            <img src="./img/horizontal_on_white_by_logaster-removebg-preview.png">
            <input type="text" size="50" name="nome"id="nome" placeholder="Nome"><br><br>
            <input type="text" size="50" name="email" id="login" placeholder="Usuario"><br><br>
            <input type="password" size="50" name="senha" id="senha" placeholder="senha" minlength="8" required><br><br>
            <input type="submit" id ="loginBtn" value="Cadastrar"><br><br>
            <a href="./login.php">Entrar</a>
            <div id="message">
                    <!-- Aqui vai a mensagem de retorno -->
            </div>
        </form>
    </div>
</body>
</html>