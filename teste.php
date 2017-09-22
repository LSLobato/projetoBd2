<?php
//	connec+on	….
    include_once ("config.php");
$sql = "SELECT	id,	nome	FROM	usuarios";
$result = mysqli_query($conexao,	$sql);
if	(mysqli_num_rows($result)	> 0)	{	//	output	data	of	each	row
    while($row = mysqli_fetch_assoc($result))	{
        echo "id:	" . $row["id"]. "	-	Nome:	" . $row["nome"].
            "<br>";	}
}	else	{
    echo "0	results";
}
mysqli_close($conn);
?>