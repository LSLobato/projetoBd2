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
            <a class="navbar-brand" >Alugue Mais</a>
            <a class="navbar-brand" href="home.php">Home</a>
            <a class="navbar-brand" href="#">Produtos</a>
            <a class="navbar-brand" href="index.php">Login</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            </ul>

        </div>
</nav>

<!-- carousel-->
<section id="carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lorem ipsum.</h1>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                        <!-- -botão- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lorem ipsum.</h1>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                        <!-- -botão- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lorem ipsum.</h1>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                        <!--  -botão-  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- /carousel -->
<section id="mkt">


    <div class="container">
        <hr>
        <div class="row">
<!--
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Lorem ipsum. <span class="text-muted">It'll blow your mind.</span></h2>
                    <p class="lead">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" src="html/img/rent.jpg" alt="Generic placeholder image">
                </div>
            </div>

        <hr class="featurette-divider"> -->

            <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading">Lorem ipsum. <span class="text-muted">It'll blow your mind.</span></h2>
                    <p class="lead">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit....</p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-responsive center-block" src="html/img/bike.jpg" alt="Generic placeholder image">
                </div>
            </div>

        </div>
    </div>

</section>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="html/bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="html/assets/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>
