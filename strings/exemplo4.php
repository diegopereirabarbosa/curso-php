<?php 

$frase = "O PHP é a melhor linguagem de programaçlão web";
$palavra = "linguagem";
echo $frase;

echo"<br>";

$q = strpos($frase, $palavra);

//var_dump($q);

$texto = substr($frase, 0 , $q);

echo $texto;

echo"<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);
?>