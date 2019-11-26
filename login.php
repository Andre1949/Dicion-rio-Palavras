<?php
include_once 'conexao.php';
$email = "'".$_POST['email']."'";
$senha = "'".$_POST['password']."'";


$dados_email = consultar("SELECT * FROM USERS WHERE email = $email ");
var_dump($dados_email);
echo "\n".$dados_email[3]." ".$_POST['password'];
if($senha == ""){
    echo "<h1>Senha Vazia</h1>";
}
if($_POST["password"] != $dados_email[3]){
    echo "SENHA INCORRETA";

}else{
    header('Location: .\home_user.html');

}












?>