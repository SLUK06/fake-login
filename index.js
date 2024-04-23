function login(event) {
    event.preventDefault();
    var usuario = document.getElementById('user').value;
    var senha = document.getElementById('pass').value;
    window.location.href = "succefull.html";
    console.log("usuário = " + usuario);
    console.log("senha = "+ senha);
    return false;
}