<?php 
    include_once('conexao.php');
    $nome = $_POST['msgNome'];
    $email = $_POST['msgEmail'];
    $mensagem = $_POST['campoMsg'];

    $sql = "INSERT INTO conexSup (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
    $query = mysqli_query($conexao, $sql);
?>

<script>
    alert("Sua mensagem foi enviada com sucesso!")
    window.location.href="index.html"
</script>