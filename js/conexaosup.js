var emailpattern =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.([a-zA-Z]{2,4})$/
var emailpattern2 =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*$/
var idpattern=/^\d{6}$/;

function Validar()
{
    var x = document.forms["dados"]["cNome"];
    if (x.value == "")
    { 
        document.getElementById('spanNome').innerHTML="Insira o campo nome.";
        x.focus();
        return false;
    }
    document.getElementById('spanNome').innerHTML='';

    var x = document.forms["dados"]["cEmail"];
    if (!emailpattern.test(x.value))
    {
        x.value = "";
        document.getElementById('spanEmail').innerHTML="Insira o campo email.";
        x.focus();
        return false;
    }
    document.getElementById('spanEmail').innerHTML='';

    var x = document.forms["dados"]["msgCampo"];
    if (x.value == "")
    {
        document.getElementById('spanBox').innerHTML="Insira o campo mensagem.";
        x.focus();
        return false;
    }
}