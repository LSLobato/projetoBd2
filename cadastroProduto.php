<html>
<head>
</head>
<body>
	

<?php
session_start();
include_once ("config.php");
/*
<?php
include_once ("config.php");
if(!$conexao){
    die ("falha na conexão" . mysqli_connect_error());
}else{
    echo "OPERAÇÃO REALIZADA COM SUCESSO!";
    header("Location: usuario.php");
}

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];

$instrucao = "INSERT INTO produto(nome, descricao, valor, quantidade) VALUES ( '$nome','$descricao','$valor','$quantidade')";
$execucao = mysqli_query($conexao ,$instrucao);
?>
 */

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];

if($nome == "" || $descricao == "" || $valor == "" || $quantidade == "" ){
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='formularioCadastroProduto.php'>Voltar</a>";
		echo "<br/>";
		
	}
	else {
$instrucao = "INSERT INTO produto(nome, descricao,valor,quantidade) VALUES ( '$nome' ,'$descricao','$valor','$quantidade')";
$execucao = mysqli_query($conexao ,$instrucao);
echo "<br/>";
		echo "Registration successfully";
		echo "<br/>";
		echo "<a href='usuario.php'>Voltar</a>";
	}
?>