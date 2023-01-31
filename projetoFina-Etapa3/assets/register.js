const messsage = document.querySelector("#message");
const form = document.querySelector("#register-form");
form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const dataUser = new FormData(form);
    const data = await fetch("http://localhost/gabrielsouzainf2am/projetoFina-Etapa3/api/user-insert.php",{
        method: "POST",
        body: dataUser,
    });
    const user = await data.json();
    console.log(user);
    message.textContent = user.message;
    message.setAttribute("style","display")
});

