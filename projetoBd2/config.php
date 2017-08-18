<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>cadastro</title>
</head>
<body>
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$banco = "aluguel";


$conexao = mysqli_connect($hostname, $username, $password, $banco);
if(!$conexao){
    die ("falha na conexão" . mysqli_connect_error());
}else{
    echo "OPERAÇÃO REALIZADA COM SUCESSO!";

}
?>
<br>
<br>
<input type="submit" value="voltar" href="html/index.html">
</body>
</html>
