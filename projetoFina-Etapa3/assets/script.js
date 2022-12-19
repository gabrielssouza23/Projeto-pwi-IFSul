const login = document.querySelector('#login');
const senha = document.querySelector('#senha');
const nome = document.querySelector('#nome');



const form2 = document.querySelector("#form-login");
const message = document.querySelector("#message");
form2.addEventListener("submit", async (e) => {
    e.preventDefault();
    const dataUser = new FormData(form2);
    const data = await fetch("http://localhost/gabrielsouzainf2am/projetoFina-Etapa3/api/user-login.php",{
        method: "POST",
        body: dataUser,
    });
    const user = await data.json();
    console.log(user);
    message.textContent = user.message;
    message.setAttribute("style","display")
    if(user.type === "error"){
      // trocar o status da message
        message.classList.remove("alert-success");
        message.classList.add("alert-danger");
    } else {
      // trocar o status da message
        message.classList.remove("alert-danger");
        message.classList.add("alert-success");
        location.href = "./home.php"
    }
    setTimeout(() => {
        message.setAttribute("style","display: none")
    }, 3000);
});

/*
function cadastrar(){
    if(nome.value != "" && login.value != "" && login.value != ""){    
        const arrayUser = [];
        const user = {
            nome: nome.value,
            login: login.value,
            senha: senha.value
        };
    
        if(localStorage.getItem("users")){
            const users = JSON.parse(localStorage.getItem("users"));
            console.log(users);
            let find = false;
            users.forEach((e) => {
                if(e.login == login.value){
                    find = true;
                    document.querySelector('#message').innerHTML = "Usuário já cadastrado";
    //              console.log("bah");
                }
                arrayUser.push(e);       
            });
            console.log(arrayUser);
            if(find){
                return;
            }
        }
        console.log(arrayUser);
        let senhaSplit = senha.value.split("");
        if(senhaSplit.length < 8){
            document.querySelector('#message').innerHTML = "Senha fraca - usuário não cadastrado";
        }
        if(senhaSplit.length  >= 8 && senhaSplit.length <= 10){
            arrayUser.push(user);
            document.querySelector('#message').innerHTML = "Senha média - entre 8 caracteres 10 caracteres";
        }
        if(senhaSplit.length > 10){
            arrayUser.push(user);
            document.querySelector('#message').innerHTML = "senha forte - mais de 10 caracteres.";
        }
        localStorage.setItem("users",JSON.stringify(arrayUser));
    }
    else{
        document.querySelector('#message').innerHTML = "Preencha todos os campos";
    }
}
*/

/*function logar(){
    document.querySelector("#form-login").addEventListener("submit", async (e) => {
        e.preventDefault();
    });
        const arrayUser = [];
        document.querySelector('#message').innerHTML = "";

        if(localStorage.getItem("users")){
            const users = JSON.parse(localStorage.getItem("users"));
            
            users.forEach((e) => {
                if(e.login == login.value && e.senha == senha.value){
                    document.querySelector('#message').innerHTML = "Login realizado";
                    if(localStorage.activeUser){
                        let activeUser = {
                            nome: e.nome,
                            login: login.value,
                            senha: senha.value,
                            telefone: JSON.parse(localStorage.getItem(activeUser).telefone),
                            nascimento: JSON.parse(localStorage.getItem(activeUser).nascimento)
                           }
                    }
                   let activeUser = {
                    nome: e.nome,
                    login: login.value,
                    senha: senha.value,
                   }
                   console.log(activeUser)
                   localStorage.activeUser = JSON.stringify(activeUser);
                   location.href = "home.php";
                }
                else{
                    document.querySelector('#message').innerHTML = "Usuário não encontrado";
                }
            });
            console.log(arrayUser);
        }
    }*/



/*
function pesquisarF(){
    let urlLeg = document.querySelector('#addLeg');
    let pesquisarBtn = document.querySelector('#pesquisarBtn');
    let pesquisar = document.querySelector('#pesquisar');

    
} */



