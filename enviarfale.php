<?php

// variavel = post do mame

$nome = $_POST['tNome'];
$senha = $_POST['tSenha'];
$email = $_POST['tNome'];
$dn = $_POST['tMail'];
$cidade = $_POST['tData'];


$conexao = mysqli_connect('127.0.0.1', 'root', '', 'multiguia' );

$sql = "INSERT INTO formulario (nome, senha, email, nascimento, cidade) VALUES ('$nome', '$senha', '$email', '$dn', '$cidade')";

$query = mysqli_query ($conexao, $sql) or die();

?>

<script type="text/javascript"> alert ('Mensagem enviada com sucesso'); location.href="MULTIGUIA.html"; </script>