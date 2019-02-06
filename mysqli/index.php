<?php 

$conn = new mysqli("localhost", "root", "", "curso_php");
if($conn->connect_error){
	echo "Erro".$conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuario(deslogin, dessenha) VALUE(?, ?)");

$stmt->bind_param("ss", $login, $senha);

$login = "Joao";
$senha = "123456";

$stmt->execute();

$login = "Diego";
$senha = "abgder";

$stmt->execute();
?>