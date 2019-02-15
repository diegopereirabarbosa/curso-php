<?php 

$filename = "usuarios.csv";

if(file_exists($filename)){
	$file = fopen($filename,"r");
	$headers = explode(",", fgets($file));
	//var_dump($headers);
	$data = array();
	
	while($row = fgets($file)){
		$dataRow = explode(",", $row);
		$linha = array();
		
		for($i=0; $i < count($headers); $i++){
			$linha[$headers[$i]]=$dataRow[$i];
		}
		
		array_push($data, $linha);
	}
	echo json_encode($data);
	
	fclose($file);
	
}
?>