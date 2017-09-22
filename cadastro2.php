<html>
<head>
</head>
<body>

<?php
#include_once ("index.php");
include_once("config.php");

$nome = $_POST['nome'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$instrucao = "INSERT INTO usuario(nome, cpf_cnpj,cidade,telefone, email, senha) VALUES ( '$nome' ,'$cpf_cnpj','$cidade','$telefone', '$email','$senha' )";
$execucao = mysqli_query($conexao ,$instrucao);

?>
</body>
</html>
