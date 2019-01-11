<?php 
$pessoa = array();

array_push($pessoa, array('nome'=>'Glaucio',
						 'idade'=>25
						 ));

array_push($pessoa, array('nome'=>'Diego',
						 'idade'=>29
						 ));

	echo json_encode($pessoa);
?>