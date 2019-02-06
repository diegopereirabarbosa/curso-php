<?php 

$conn = new mysqli("localhost", "root", "", "curso_php");
if($conn->connect_error){
	echo "Erro".$conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()){
	array_push($data, $row);
}

echo json_encode($data);
?>