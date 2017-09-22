<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aluguel de Equipamentos</title>

    <link href="html/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap.css.map" rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap.min.css.map" rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap-theme.css.map " rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap-theme.min.css " rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap-theme.min.css.map " rel="stylesheet">
    <link href="html/css/cssCadastro.css " rel="stylesheet">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form name="signUp" method="post" action="cadastroProduto.php">

                Nome <br>
                <input type="text" class="form-control" name="nome">

                Descrição <br>
                <input type="text" class="form-control" name="descricao">

                valor <br>
                <input type="number" class="form-control" name="valor">

                quantidade<br>
                <input type="number" class="form-control" name="quantidade">

                <br>
                <input type="submit" name="cadastrar" value="cadastrar">




            </form>
        </div>
    </div>
</div>



</body>
</html>