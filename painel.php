<?php
session_start();
include_once ("config.php");
/*
    session_start();
include_once("config.php");

if(isset ($_SESSION["email"])!==$_POST['email'] && !isset($_SESSION["senha"])!==$_POST['senha'] ){

    header("Location: usuario.php");
}else{
    header("Location: index.php");
}
*/
#include("connection.php");
if(isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($mysqli, $_POST['username']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);
    if( $user != null && $pass !=null){
        $result = mysqli_query($mysqli, "SELECT * FROM proprietario WHERE username='$user' AND senha=md5('$pass')")
        or die("Could not execute the select query.");
        $row = mysqli_fetch_assoc($result);
        if(is_array($row) && !empty($row)) {
            $validuser = $row['username'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['id'] = $row['id'];
        } else {
            echo "Usuario ou senha invalidos.";
            echo "<br/>";
            echo "<a href='index.php'>Voltar</a>";
        }
        if(isset($_SESSION['valid'])){
            header('Location: index.php');
        }
    }
}

?>


