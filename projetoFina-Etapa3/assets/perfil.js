const messsage = document.querySelector("#message");
const form3 = document.querySelector("#profile-form");
form3.addEventListener("submit", async (e) => {
    e.preventDefault();
    const dataUser = new FormData(form3);
    const data = await fetch("http://localhost/gabrielsouzainf2am/projetoFina-Etapa3/api/user-update.php",{
        method: "POST",
        body: dataUser,
    });
    const user = await data.json();
    console.log(user);
    message.textContent = user.message;
    message.setAttribute("style","display")
});