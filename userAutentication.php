<?php

session_start();
include_once ("config.php");


$email = $_POST['email'];
$senha = $_POST['senha'];
	
	if($email == "" || $senha == ""){
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='index.php'>Voltar</a>";
		echo "<br/>";
	}
	else {
        $result = mysqli_query($conexao, "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'")
        or die("Could not execute the select query.");

        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)) {
                $validuser = $row['email'];
                $_SESSION['valid'] = $validuser;
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
        } else {
            echo "Invalid username or password.";
            echo "<br/>";
            echo "<a href='index.php'>Go back</a>";
        }

        if(isset($_SESSION['valid'])) {
            header('Location: usuario.php');
        }
    }
/*
if( (isset($_POST['email'])) && (isset($_POST['senha']))){
header("Location: usuario.php");

}
else{
$_SESSION['loginErro'] = "usuário ou senha inválido";
header("Location: index.php");
}



$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if($nome == "" || $cpf == "" || $cidade == "" || $telefone == "" || $email == "" || $senha == ""){
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='formularioCadastro.php'>Voltar</a>";
		echo "<br/>";
		
		
	} else {

$instrucao = "INSERT INTO usuario(nome, cpf,cidade,telefone, email, senha) VALUES ( '$nome' ,'$cpf','$cidade','$telefone', '$email','$senha' )";
$execucao = mysqli_query($conexao ,$instrucao);

echo "<br/>";



if(isset($_POST['entrar'])) {
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
	
	if($email == "" || $senha == "") {
        echo "Either username or password field is empty.";
        echo "<br/>";
        echo "<a href='index.php'>Go back</a>";
	}
		else{
			
			
			
		}
  
        
		if(is_array($row) && !empty($row)) {
            $validuser = $row['nome'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['id'] = $row['id'];
        } else
            {
            echo "Usuario ou senha invalidos.";
            echo "<br/>";
            echo "<a href='index.php'>Voltar</a>";
        }
        if(isset($_SESSION['valid'])){
            header('Location: usuario.php');
        }
    
}
*/
?>