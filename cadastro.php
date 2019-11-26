<?php
include_once 'conexao.php';


$name = "'".$_POST['nome']."'";
$email = "'".$_POST['email']."'";
$senha = "'".$_POST['senha']."'";
$confirmaSenha = "'".$_POST['confirmaSenha']."'";
$camposOk = true;


if ($name == "") {
    echo "<h3 style='color:red'>Insira o seu nome!</h3>";
    $camposOk = false;
}

if ($senha != $confirmaSenha) {
    echo "<h3 style='color:red'>As senhas não conferem!</h3>";
    $camposOk = false;
}

$dados = Inserir("INSERT INTO USERS (name,email,password) values ($name, $email, $senha)");


if($camposOk){
    header('Location: ./login.html');
}





?>

