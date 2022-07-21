<?php

if(isset($_POST['lNome']) && isset($_POST['lSenha'])) {
    
    include('conexao.php');

    $email = $conexao->escape_string($_POST['lNome']);
    $senha = $_POST['lSenha'];

    $sql_code = "SELECT * FROM conexCad WHERE email = '$email'";
    $sql_query = $conexao->query($sql_code) or die($mysqli->error);

    if($sql_query->num_rows == 0) {
        echo "O e-mail informado é incorreto";
    } else {
        $usuario = $sql_query->fetch_assoc();
        if(password_verify($senha, $usuario['senha'])) {
            echo "A senha informada está incorreta";
        } else {
            if(!isset($_SESSION))
                session_start();
            $_SESSION['lNome'] = $usuario['nome'];
            header("Location: indexLog.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KA.NEXT</title>
    <!--CSS-->
    <link rel="stylesheet" href="CSS/style.css">
    <!--Fonte garantia-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Khand&family=Titillium+Web:wght@300&display=swap');
    </style>
    <!--JS-->
    <script src="js/conexaolog.js"></script>
</head>
<body>
    <header>
        <a href="index.html"><img class="imglogo" src="Imagens/Turbo.png" alt="KA.NEXT"></a>
        <a href="cadastro.html"><button class="btncadastro"><b>CADASTRE-SE</b></button></a>
        <a href="login.html"><button class="btncadastro"><b>ENTRAR</b></button></a>
    </header>
    <div class="links">                 
        <a href="index.html" target="blank">Menu</a>
        <a href="cursos.html" target="blank">Cursos</a>
        <a href="quemsomos.html" target="blank">Quem somos</a>
        <a href="suporte.html" target="blank">Suporte</a>
    </div>

    <section class="container">
        <br>
        <h1>Inisra seus dados e continue de onde parou!</h1>
        <br>
        <hr>
        <br>
        <form action="" name="dados" id="logForm" method="post">
            <input type="email" name="lNome" class="txtcampo" id="msgUser" placeholder="Email">
            <br>
            <span style="color: red;" id="nomeErro"></span>
            <br><br>
            <input type="password" name="lSenha" class="txtcampo" id="msgSenha" placeholder="Senha">
            <br>
            <span style="color: red;" id="senhaErro"></span>
            <br>
            <button id="btnform" type="submit" class="txtcampo" value="cadastrar" onclick="return Validar()">Entrar</button><br>
        </form> 
    </section>

    <br><br><br><br><br>
    
    <div class="socialmedia">
        <img src="Imagens/facebook.png">
        <img src="Imagens/instagram.png">
        <img src="Imagens/twitter.png">
    </div>

    <footer class="rodapé1">
        <p>Todos os direitos reservados &copy;<br>2022 </p>
    </footer>

  </body>
  </html>