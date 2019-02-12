<?php 

$name = "imagens";

if (!is_dir($name)){
	mkdir($name);
	echo"Diretório <b>$name</b> criado com sucesso!!";
}else{
	rmdir($name);
	echo"Já existe um diretório com nome<b> $name</b> e foi excluido";
}

?>