  <nav class="nav">
      <div class="logo">
        <a href="./home.php"><img id="logo" src="./img/horizontal_on_white_by_logaster-removebg-preview.png"></a>
         <div id="welcome">
           <!-- Aqui vai a mensagem de retorno -->
        </div>  
      </div>
 
      <ul class="menu">
        <button id="home" onclick="goHome()">Home</button>
        <input type="color" name="cor" id="cor">
        <button id="adicionar" onclick="adicionar(); return false">Adicionar -></button>
        <form>
 
          <input type="text" size="20" id="addFoto" placeholder="  Add url da foto">
          <input type="text" size="20" id="addLeg" placeholder="  Add legenda">
        </form>
        <button id="att" onclick="attPerfil()">Perfil</button>
        <button id="logout" onclick="deslogar()">Logout</button>
      </ul>
  </nav>