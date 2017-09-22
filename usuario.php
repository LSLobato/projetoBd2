<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aluge Mais</title>

    <link href="html/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap.css.map" rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap.min.css.map" rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap-theme.css.map " rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap-theme.min.css " rel="stylesheet">
    <link href="html/bootstrap/css/bootstrap-theme.min.css.map " rel="stylesheet">


    <link href="html/css/style.css " rel="stylesheet">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Alugue Mais</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="logout.php">sair</a></li>
            </ul>

        </div>
</nav>

<div class="container">
<br>
<br>
<br>
<br>
    <div class="row">
<div class="col-md-6">
    <a href="formularioCadastroProduto.php">Cadastrar produto </a>
</div>
    <div class="col-md-6">
        <a href="verProduto.php">Ver produtos cadastrados</a>
    </div>

</div>



</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="html/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="html/assets/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>
