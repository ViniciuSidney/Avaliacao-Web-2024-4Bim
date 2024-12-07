
let p_message = document.getElementById("p-message");

function login(){
    let usr = document.getElementById("name").value;
    let password = document.getElementById("pwd").value;

    if (usr != "admin" || password != "administrador"){
        p_message.innerHTML = "Usuário ou Senha Inválidos!";
        alert("Usuário ou Senha Inválidos!");
        return false;
    }
    return true;
}
