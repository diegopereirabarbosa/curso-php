<?php 
$conn = new PDO("mysql:dbname=curso_php;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUE(:LOGIN, :PASSWORD)");

$login = "Ana";
$password = "abrc5";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido com sucesso";

?>