const login = document.querySelector('#login');
const senha = document.querySelector('#senha');
const nome = document.querySelector('#nome');
const imgPost = document.querySelector('#addFoto');
const imgLeg = document.querySelector('#addLeg');
var publicar = document.querySelector('#publicar');
const previewDiv = document.querySelector('#previewDiv');
const previewBtn = document.querySelector('#preview');
const formPost = document.querySelector('#form-post');
const message = document.querySelector("#message");
// const formSearch = document.querySelector("#form-search");
// formPost.addEventListener("submit", (e)=>{
//    // e.preventDefault();
// });
previewBtn.addEventListener("click", async ()=>{
   // previewDiv.insertAdjacentHTML("afterend",  "<img src= " + imgPost.value" + "width='500' height='600'>");
// Cria um elemento img

var imgElement = document.createElement("img");
// previewDiv.insertAdjacentElement("afterbegin", "");
// Define a propriedade src do elemento img com o valor da variável imgPost.value
imgElement.src = imgPost.value;

// Adiciona o elemento img à div previewDiv
previewDiv.innerHTML = "";
previewDiv.insertAdjacentElement("afterbegin", imgElement);
});


//const uploads = document.querySelector("#register-form");
formPost.addEventListener("submit", async (e) => {
    e.preventDefault();
    const dataPost = new FormData(formPost);
    const data = await fetch("http://localhost/gabrielsouzainf2am/projetoFina-Etapa3/api/upload.php",{
        method: "POST",
        body: dataPost,
    });
    const post2 = await data.json();
    console.log(post2);
    message.textContent = post2.message;
    message.setAttribute("style","display")

});

// formSearch.addEventListener("submit", async (e) =>{
//     e.preventDefault();
//     const dataSearch = new FormData(formSearch);
//     const data2 = await fetch("http://localhost/gabrielsouzainf2am/projetoFina-Etapa3/api/search.php", {
//         method: "POST",
//         body: dataSearch,
//     });
//     const search2 = await data2.json();
//     console.log(search2);
// });
