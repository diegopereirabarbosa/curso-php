<?php 

function __autoload($nomeClasse){
	
	require_once("$nomeClasse.php");
	
}

//require("DelRey.php");

$carro = new DelRey();
$carro->acelerar(100);


?>