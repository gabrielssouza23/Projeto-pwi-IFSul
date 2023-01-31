const welcome = document.querySelector('#welcome');
let container = document.querySelector('.container');
let postBtn = document.querySelector('#adicionar');

postBtn.addEventListener("click", ()=>{
    location.href = "addPage.php"
})

function deslogar(){
    var logout = document.querySelector('#logout');

    location.href = "login.php";
}

function goHome(){
    var homeBtn = document.querySelector('#home');

    location.href = "home.php";
}

function attPerfil(){
    location.href = "perfil.php";
}