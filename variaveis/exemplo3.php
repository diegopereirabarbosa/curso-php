<?php
	$nome = "Diego";

	function teste(){
		global $nome;
		echo $nome;
		
	}
	function teste2(){
		global $nome;
		echo "<br>".$nome."Teste 2";
	}
	teste();
	teste2();
?>