
<?php
include_once("config.php");

$instrucao = "SELECT	nome, descricao FROM	usuarios";
$result = mysqli_query($conexao,	$instrucao);
if	(mysqli_num_rows($result)	>  0)	{	//	output	data	of	each	row
    while($row = mysqli_fetch_assoc($result))	{
        echo "Nome:	" . $row["nome"] ."</br> ". "Descrição	" . $row["descrição"].
            "<br>";	}
}
else{
    echo "0	results";
}


/*
$query = "SELECT * FROM produto";
$consulta = mysqli_query($sql,$conexao) or die ( mysqli_error());

$row = mysqli_fetch_assoc($consulta);
$totalRow = mysqli_num_rows($consulta);
$id = $row['id'];


echo "Produto";
do{
    $nome = $row['nome'];
    $descricao = $row['descricao'];
    echo "<br>";
    echo "Nome: " .$nome;
    echo "<br>";
    echo "Descrição: " .$descricao;
}
while( $id > 0);
*/

/*<?php
$sql = "select *from produto";
mysqli_query ($sql,$conexao);

$dados = mysqli_fetch_array($mysqli_query)

$titulo = $dados["item_tabela"];

?>*/


?>


<html>
<head>
    <meta charset="utf-8">
</head>
<body>

</body>


</html>

