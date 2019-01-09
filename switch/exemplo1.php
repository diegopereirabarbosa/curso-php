<?php 

$diaSemana = date("w");

switch($diaSemana){
	case 0:
	echo "domingo";
	break;
		
	case 1:
	echo "Segunda";
	break;
	
	case 2:
	echo "terça";
	break;
	
	case 3:
	echo "quarta";
	break;
	
	case 4:
	echo "quinta";
	break;
	
	case 5:
	echo "sexta";
	break;
		
	case 6:
	echo "sabado";
	
	default:
	echo"Nenhum dia";
}

?>