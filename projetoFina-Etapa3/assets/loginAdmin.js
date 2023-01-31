const formAdmin = document.querySelector("#form-loginAdmin");
const message = document.querySelector("#message");
formAdmin.addEventListener("submit", async (e) => {
    e.preventDefault();
    const dataUser = new FormData(formAdmin);
    const data = await fetch("http://localhost/gabrielsouzainf2am/projetoFina-Etapa3/api/admin-login.php",{
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
        location.href = "./admin.php"
    }
    setTimeout(() => {
        message.setAttribute("style","display: none")
    }, 3000);
});

