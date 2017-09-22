<?php
session_start();
include_once("config.php");

$itens = 3;
$pagina = intval($_GET['pagina']);
# nome descrica quantidade valor
$sql = "select nome, descricao, valor, quantidade from produto limit $pagina, $itens";
$execute = $mysqli-> query($sql) or die ($mysqli->error);
$produto = $execute->fetch_assoc();
$num = $execute->num_rows;

#recebe todos os produtos'
$num_total = $mysqli->query("select nome, descricao, valor, quantidade from produto")->num_rows;
$num_paginas = ceil($num_total/$itens);


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
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h2>Produtos</h2>
            <?php if($num >0 ){ ?>
            <table class="table table-responsive table-bordered table-hover">
            <thead>
            <tr>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Quantidade</td>
                <td>Preço</td>
            </tr>
            </thead>
                <tbody>
                <?php do{ ?>
                <tr>
                <td><?php echo $produto['nome']; ?></td>
                <td><?php echo $produto['descricao']; ?></td>
                <td><?php echo $produto['quantidade']; ?></td>
                <td><?php echo $produto['preco']; ?></td>
                </tr>
                <?php  } while($produto = $execute->fetch_assoc()); ?>
                </tbody>
            </table>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="listaProduto.php?pagina=0" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php
                        for( $i=0 ; $i<$num_paginas ; $i++){
                              $estilo="";
                              if($pagina == $i){
                                  $estilo = " class=\"active\"" ;
                              }
                            ?>

                        <li <?php echo $estilo?> ><a href="listaProduto.php?pagina="> <?php echo $i+1 ?></a></li>
                        <?php }?>
                        <li>
                            <a href="listaProduto.php?pagina="<?php echo $num_paginas-1; ?> aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>


            <?php } ?>
        </div>
    </div>


</div>
<!-- paginação bootstrap
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
-->

</body>
</html>