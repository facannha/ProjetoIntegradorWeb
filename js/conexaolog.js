var emailpattern =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.([a-zA-Z]{2,4})$/
var emailpattern2 =/^[a-zA-Z][a-zA-Z0-9_]*(\.[a-zA-Z0-9_]+)*$/
var idpattern=/^\d{6}$/;

function Validar()
{
    var x = document.forms["dados"]["msgUser"];
    if (x.value == "")
    { 
        document.getElementById('nomeErro').innerHTML="É necessário preencher o campo email.";
        x.focus();
        return false;
    }
    document.getElementById('nomeErro').innerHTML='';

    var x = document.forms["dados"]["msgSenha"];
    if (x.value == "")
    { 
        document.getElementById('senhaErro').innerHTML="É necessário preencher o campo senha.";
        x.focus();
        return false;
    }
}