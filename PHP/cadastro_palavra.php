<?php
include_once 'conexao.php';


$palavra = "'".$_POST['palavra']."'";
$sinonimo = "'".$_POST['sinonimo']."'";
$frase ="'".$_POST['frase']."'";

$camposOk = true;





$dados = Inserir("INSERT INTO WORDS (palavra,sinonimo,frase) values ($palavra, $sinonimo, $frase)");





// ".$palavra.", ".$sinonimo.", ".$frase."
?>
