var emailpattern =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.([a-zA-Z]{2,4})$/
var emailpattern2 =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*$/
var idpattern=/^\d{6}$/;

function Validar()
{
    var x = document.forms["dados"]["cNome"];
    if (x.value == "")
    { 
        document.getElementById('msgNome').innerHTML="Insira o campo nome.";
        x.focus();
        return false;
    }
    document.getElementById('msgNome').innerHTML='';

    var x = document.forms["dados"]["cEmail"];
    if (!emailpattern.test(x.value))
    {
        x.value = "";
        document.getElementById('msgEmail').innerHTML="Insira um email válido.";
        x.focus();
        return false;
    }
    document.getElementById('msgEmail').innerHTML='';

    var x = document.forms["dados"]["cSenha"];
    if (x.value == "")
    {
        document.getElementById('msgSenha').innerHTML="Insira o campo senha.";
        x.focus();
        return false;
    }
}