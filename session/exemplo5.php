<?php 

require_once("config.php");



echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()){
	case PHP_SESSION_DISABLED:
	echo"As sessoes estão desabilitadas";
	break;
	
	case PHP_SESSION_NOME:
	echo"As sessoes estão desabilitadas, mais nenhuma existir";
	break;
		
	case PHP_SESSION_ACTIVE:
	echo"As sessoes estão habilitadas e existir";
	break;
}
?>