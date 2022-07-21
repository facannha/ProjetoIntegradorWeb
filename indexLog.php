<?php

include('conexao.php');
if(!isset($_SESSION))
session_start();

if(!isset($_SESSION['lNome'])) {
    header("Location: indexLog.php");
    die();
}
  

$id = $_SESSION['lNome'];
$sql= "SELECT * FROM conexCad";
$query= $conexao->query($sql) or die ($conexao->error);
$num_clientes= $query->num_rows;

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KA.NEXT</title>
    <!--CSS-->
    <link rel="stylesheet" href="CSS/style.css">
    <!--Fonte-->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap');
    </style>
</head>
<body>
    <header>
        <a href="#"><img class="imglogo" src="Imagens/Turbo.png" alt="KA.NEXT"></a>
        <h2 id="lWelcome">Bem vindo(a), <?php echo $_SESSION['lNome'];?></h2>
        <h2><a href="logout.php"><button id="lLogout">Sair</button></a></h2>
    </header>
    <div class="links">                 
        <a href="#">Menu</a>
        <a href="cursos.html">Cursos</a>
        <a href="quemsomos.html">Quem somos</a>
        <a href="suporte.html">Suporte</a>
    </div>

    <div class="apresenta">
        <p>Mergulhe em conhecimento<br> dentro da KA.NEXT!</p>
        <h6><b>Procure um curso de seu interesse e comece a aprender!</b></h6>
    </div>

    <section class="conteudos">
      <div class="boxinfo">
        <p class="apresent">PROGRAMAÇÃO</p></a>
        <p class="infop">Aprofunde seus conhecimentos na linguagem de programação que você desejar.</p>
      </div>
      <div class="boxinfo">
        <p class="apresent">NEGÓCIOS</p>
        <p class="infop">Fique por dentro das principais tendências dentro do mercado para implementar em seus negócios.</p>
      </div>
      <div class="boxinfo">
        <p class="apresent">DESIGN</p>
        <p class="infop">Melhore sua criatividade e projetos.</p>
      </div>
      <div class="boxinfo">
      <p class="apresent">TI E SOFTWARE</p>
      <p class="infop">Entre no universo de conceitos e infraestruturas sobre TI.</p>
      </div>
    </section>

    <hr id="divisao1">

    <section class="mkt">
      <div class="divulg">
        <p>A plataforma que irá tranformar sua carreira!</p>
      </div>
      <div class="divulg">
        <p>Aprofunde seus conhecimentos de forma didática e livre.</p>
      </div>
      <div class="divulg">
        <p>Inicie um curso agora e comece a aprender!</p>
      </div>
    </section>

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