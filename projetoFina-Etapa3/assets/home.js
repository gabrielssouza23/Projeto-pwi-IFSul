const welcome = document.querySelector('#welcome');
let container = document.querySelector('.container');
let addBtn = document.querySelector('#adicionar');
let urlFoto = document.querySelector('#addFoto');
let urlLeg = document.querySelector('#addLeg');
let arrayPost = [];
let cor = document.querySelector('#cor');
    //let nav = document.querySelector('');

cor.addEventListener("change", () =>{
      document.body.style.background = cor.value;
   //   header.nav.style.background = cor.value;
    
    localStorage.setItem('cor', JSON.stringify(cor.value));
});
window.addEventListener('load', () =>{
    let welcomeMessage = JSON.parse(localStorage.activeUser);
   //if(welcomeMessage){
        welcome.innerHTML = "<p>Bem vindo(a), " + welcomeMessage.nome + "!</p>";
   //}
    if(localStorage.cor){
        document.body.style.background = JSON.parse(localStorage.getItem('cor'));
    }
});
window.addEventListener('load', () => {
    let addLoad;
    if(localStorage.post){
        addLoad = JSON.parse(localStorage.getItem('post'));
    
    addLoad.forEach((e) =>{
        container.insertAdjacentHTML("afterbegin", 
        `    <div class="item-1">
                <img class="img" src="${e.foto}">
                <p>${e.leg}</p>
            </div>`
           );
    });
    }
  });

function adicionar(){

    let post = {
        foto: urlFoto.value,
        leg: urlLeg.value
    };
    if(localStorage.arrayPost){
        arrayPost = JSON.parsse(localStorage.getItem('post'));
    }

    arrayPost.push(post);
    console.log(arrayPost);
    localStorage.setItem("post", JSON.stringify(arrayPost));

    container.insertAdjacentHTML("afterbegin", 
    `    <div class="item-1">
            <img class="img" src="${urlFoto.value}">
            <p>${urlLeg.value}</p>
        </div>`
       );

}

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