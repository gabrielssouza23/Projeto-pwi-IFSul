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

    function getImage($conn){
      $query = "select * from images;";
      $stmt = $conn->query($query);
      return $stmt->fetchAll();
    }
    // var_dump($query);
    $url = getImage($conn);

  
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <title>Tintendo Gallery</title>
    <link rel="shortcut icon" href="./img/horizontal_on_white_by_logaster-removebg-preview_1__1_.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/home.js" async></script>
    <script src="./assets/script.js" async></script>
 
</head>
<body>
  <header class="header">
  <nav class="nav">
      <div class="logo">
        <a href="./home.php"><img id="logo" src="./img/horizontal_on_white_by_logaster-removebg-preview.png"></a>
         <div id="welcome">
           <!-- Aqui vai a mensagem de retorno -->
        </div>  
      </div>
 
      <ul class="menu">
        <button id="home" onclick="goHome()">Home</button>
        <form id="search-form" action="api/list-images.php" method="POST">
          <input type="search" id="search" name="q" placeholder="Search..."></input> 
          <button id="searchBtn" >Search</button>
        </form>
        
        <button id="adicionar">Adicionar</button>
        <button id="att" onclick="attPerfil()">Perfil</button>
        <button id="logout" onclick="deslogar()">Logout</button>
      </ul>
  </nav>
  </header>
  <main class="container">
    <div class="item-1">
      <img class="img" src="https://picsum.photos/500/300" alt="">
      <p>Peace</p>
    </div>
    <div class="item-2">
      <img class="img" src="https://picsum.photos/500/301" alt="">
      <p>Follow the way</p>
    </div>
    <div class="item-3">
      <img class="img" src="https://picsum.photos/500/302" alt="">
      <p>Be happy</p>
    </div>
    <div class="item-4">
      <img class="img" src="https://picsum.photos/500/600" alt="">
      <p>...</p>
    </div>
    <div class="item-5">
      <img class="img" src="https://picsum.photos/500/800" alt="">
      <p>Live</p>
    </div>
    <div class="item-6">
      <img class="img" src="https://picsum.photos/500/400" alt="">
      <p>Just chill</p>
    </div>
    <div class="item-7">
      <img class="img" src="https://picsum.photos/500/304" alt="">
      <p>:D</p>
    </div>
    <div class="item-8">
      <img class="img" src="https://picsum.photos/500/401" alt="">
      <p>;)</p>
    </div>
    <div class="item-9">
      <img class="img" src="https://picsum.photos/500/900" alt="">
      <p>Be yourself</p>
    </div>
    <div class="item-10">
      <img class="img" src="https://picsum.photos/500/305" alt="">
      <p>Dream!</p>
    </div>
    <?php    

     foreach ($url as $posts) {
        $value = random_int(1, 14);
        echo "<div class=\"item-{$value}\">
        <img class=\"img\" src=\"{$posts->url}\">
        <p>{$posts->legenda}</p>
      </div>";
    }; 
    

//       foreach ($categoria as $categorias) {
//         $value = random_int(1, 14);
//         echo "<div class=\"item-{$value}\">
//         <img class=\"img\" src=\"{$categorias->url}\">
//         <p>{$categorias->legenda}</p>
//         </div>";
// }    

?>
    <div class="item-11">
      <img class="img" src="https://picsum.photos/500/500" alt="">
      <p>Smile</p>
    </div>
    <div class="item-12">
      <img class="img" src="https://picsum.photos/500/901" alt="">
      <p>Life is good</p>
    </div>
    <div class="item-13">
      <img class="img" src="https://picsum.photos/500/700" alt="">
      <p>Bah</p>
    </div>
    <div class="item-14">
      <img class="img" src="https://picsum.photos/500/402" alt="">
      <p></p>
    </div>
    <div class="item-14">
      <img class="img" src="https://picsum.photos/500/306" alt="">
      <p></p>
    </div>
  </main>
  <script>
    /*
      const formSearch = document.querySelector("#search-form"); 
      formSearch.addEventListener("submit", async (e) => {
          e.preventDefault();
          const dataSearch = new FormData(formSearch);
          const data = await fetch("http://localhost/gabrielsouzainf2am/projetoFina-Etapa3/api/list-images.php",{
              method: "POST",
              body: dataUser,
          });
        });
        */
    </script>
</body>
</html>

