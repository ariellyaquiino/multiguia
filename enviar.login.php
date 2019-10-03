<?php

// variavel = post do mame

$email = $_POST['tMail'];
$senha = $_POST['tSenha'];

$conexao = mysqli_connect('127.0.0.1', 'root', '', 'multiguia' );

$sql = "INSERT INTO login (email, senha) VALUES ('$email', $senha')";

$query = mysqli_query ($conexao, $sql) or die();

?>

<script type="text/javascript"> alert ('Bem vindo.'); location.href="MULTIGUIA.html"; </script>

