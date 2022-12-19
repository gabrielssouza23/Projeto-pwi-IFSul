const form = document.querySelector("#register-form");
form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const dataUser = new FormData(form);
    const data = await fetch("http://localhost/gabrielsouzainf2am/projetoFina-Etapa3/api/user-insert.php",{
        method: "POST",
        body: dataUser,
    });
    const user = await data.text();
    console.log(user);
});

/*const nome = document.querySelector('#nome');
const login = document.querySelector('#login');
const senha = document.querySelector('#senha');
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
};
 */