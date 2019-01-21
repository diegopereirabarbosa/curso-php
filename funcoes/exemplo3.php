<?php

function ola($texto, $periodo = "Bom dia"){
	return"Olá $texto! $periodo<br>";
}
echo ola("S", "");
echo ola("Diego", "Bo noite");
echo ola("João", "");

?>