document.querySelector('#nome').placeholder = JSON.parse(localStorage.getItem('activeUser').nome);


function atualizar(){
    document.querySelector("#form-perfil").addEventListener("submit", async (e) => {
        e.preventDefault();
    });
    if(localStorage.activeUser){
        JSON.pase(localStorage.getItem('activeUser')) = {
            nome: JSON.parse(localStorage.getItem('activeUser').nome),
            login: JSON.parse(localStorage.getItem('activeUser').login),
            senha: JSON.parse(localStorage.getItem('activeUser').senha),
            telefone: telefone.value,
            nascimento: nascimento.value,
        }
    //    document.getElementsByName('nome')[0].placeholder = JSON.parse(localStorage.getItem(activeUser).nome);
    }
}