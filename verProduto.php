<?php

session_start();
if (!isset($_SESSION['valid'])) {
    header('Location: login.php');
}

#including the database connection file
include_once("config.php");

#verifica a página atual caso seja informada na URL, senão atribui como 1ª página
$pagina = filter_input(INPUT_GET, 'pagina', FILTER_VALIDATE_INT);

#qtd de itens por página
$registros = 2;

#calcula o início da visualização
$inicio = ($registros * $pagina);

#conta o total de itens
$resultTotal = mysqli_query($conexao, "SELECT count(id) FROM produto where usuario_id =" . $_SESSION['id']);
$row = mysqli_fetch_all($resultTotal);

#seleciona os itens por página
$result = mysqli_query($conexao, "SELECT * FROM produto WHERE usuario_id=" . $_SESSION['id'] . " ORDER BY id DESC LIMIT $inicio, $registros");

#número de páginas
$numPaginas = ceil($row[0][0] / $registros);
?>

<!DOCTYPE html>
<html lang="pt-BR">
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
<div class="container-fluid">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills float-right" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="usuario.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formularioCadastroProduto.php">Adicionar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Alterar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sair</a>
                </li>
            </ul>
        </nav>
        <h3 class="text-muted">Produtos</h3>
    </div>
    <table class="table table-hover table-sm table-responsive overflow-y: hidden">
        <thead class="thead-inverse">
        <tr>
            <th>nome</th>
            <th>decrição</th>
            <th>valor</th>
            <th>quantidade</th>

        </tr>
        </thead>
        <tbody>
        <?php
        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['nome'] . "</td> ";
            echo "<td>" . $res['descricao'] . "</td>";
            echo "<td>" . $res['quantidade'] . "</td>";
            echo "<td>" . $res['valor'] . "</td>";

        }
        ?>
        </tr>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="verProduto.php?pagina=0">Anterior</a></li>
            <?php
            for ($i = 0; $i < $numPaginas; $i++) {
                $estilo = '';
                if ($pagina == $i) {
                    $estilo = "active";
                }
                ?>
                <li class="page-item <?php echo $estilo ?>"><a
                            href="verProduto.php?pagina=<?php echo $i ?>"><?php echo $i + 1 ?> </a></li>
                <?php
            }
            ?>

            <li class="page-item"><a class="page-link"
                                     href="verProduto.php?pagina=<?php echo $pagina + 1 ?>">Próxima</a></li>
        </ul>
    </nav>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>
</html>
