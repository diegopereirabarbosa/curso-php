<?php 

$images = scandir("imagens");

$data = array();

foreach ($images as $img){
	if(!in_array($img, array(".", ".."))){
		$filename = "imagens" . DIRECTORY_SEPARATOR .$img;
		$info = pathinfo($filename);
		$info["size"] = filesize($filename)." KB";
		$info["modified"] = date("d/m/y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/curso-php/DIR/".str_replace("\\", "/", $filename);
		
		array_push($data, $info);
	}
}
echo json_encode($data);
?>