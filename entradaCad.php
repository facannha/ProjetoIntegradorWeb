<?php 
    include_once('conexao.php');
    $nome = $_POST['lNome'];
    $email = $_POST['lEmail'];
    $senha = $_POST['lSenha'];

    $sql = "INSERT INTO conexCad (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    $query = mysqli_query($conexao, $sql);
?>

<script>
    alert("Seu cadastro foi realizado com sucesso!")
    window.location.href="login.php"
</script>