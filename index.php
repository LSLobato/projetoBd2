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
            <a class="navbar-brand span" ><span class="text-muted"> Alugue Mais </span></a>
            <a class="navbar-brand" href="home.php">Home</a>
            <a class="navbar-brand" href="index.php">Login</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            </ul>

        </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <br>
            <br>
            <br>
            <h4>Já é usuário?</h4>
            <h5>Faça loguin e anuncie</h5>

            <form name="formLogin" action="userAutentication.php" method="post">

                <div class="form-group" style="margin-top: 0px">

                    <input name="email" type="text" class="form-control" style="font-family: Georgia,sans-serif"
                           placeholder="email">
                </div>

                <div class="form-group" style="margin-top: 0px">

                    <input name="senha" type="password" class="form-control"
                           style="font-family: Georgia,sans-serif"
                           placeholder="digite sua senha">
                </div>



                <div class="col-md-4 col-md-offset-2" style="top: 1.4em">
                    <button type="submit" class="btn btn-default color-button" href="" value="Sua Conta">Esqueceu sua
                        senha?
                    </button>
                </div>

                <div class="col-md-6 col-md-offset-8" style="bottom: 1em; margin-right: 10px">
                    <input type="submit" name="entrar" class="btn btn-primary" value="Entrar">
                </div>

                <div class="col-md-6" style="top:3em;">
                    <a href="formularioCadastro.php" style="font-family: Georgia,sans-serif"><p>Caso não
                            seja
                            cadastrado, clique aqui!</p></a>
                </div>
            </form>
            <p class="text-center text-danger">
                <?php
                if(isset($_SESSION['loginErro'])) {
                    echo $_SESSION['loginErro'];
                    unset ($_SESSION['loginErro']);
                }
                ?>
            </p>

        </div>


    <div class="col-md-6">

    </div>
</div>


<h
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
