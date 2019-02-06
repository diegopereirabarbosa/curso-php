<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Diego");
$cad->setEmail("diego@diego.com");
$cad->setSenha("123456789");

$cad->registraVenda();
echo $cad;
?>