<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<body>

<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$banco = "aluguel";


$conexao = mysqli_connect($hostname, $username, $password, $banco) or die (mysqli_connect_error());
?>
</body>
</html>
