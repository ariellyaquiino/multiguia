<?php

// variavel = post do mame
$email = $_POST['tMail'];
$senha = $_POST['tSenha'];


$conexao = mysqli_connect('127.0.0.1', 'root', '', 'multiguia' );


$sql = "DELETE from cadastro WHERE email='$email' AND senha = '$senha'";



$query = mysqli_query ($conexao, $sql) or die();



if($query != null){
	?>
echo "<script type="text/javascript"> alert ('Cadastro apagado com sucesso'); location.href="MULTIGUIA.html"; </script>";
<?php
}
else{
	echo "senha ou usuario errado";
}