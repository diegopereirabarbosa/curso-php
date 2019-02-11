<?php 

require_once("config.php");

$root = new Usuario();
$root->loadById(10);

echo $root;


?>