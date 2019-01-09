<?php 

$idade = 60;
$idadeCri = 12;
$idadeAdul = 18;
$idadeIdos= 60;

if($idade < $idadeCri){
	echo "É uma criança";
}else if($idade < $idadeAdul){
	echo "É adolecente";
}else if($idade < $idadeIdos){
	echo "É adulto";
}else{
	echo"É um idoso";
}

echo "<br>";

echo($idade < $idadeIdos)?"Menor de idade":"Maior de Idade";
?>
