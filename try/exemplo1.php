<?php 
try{
	
	throw new Exception("Houve um erro",400);
	
}catch(Exception $e){
	
	echo json_encode(array(
		"mesage"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));
}
	
?>
