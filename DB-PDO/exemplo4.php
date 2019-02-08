<?php 
$conn = new PDO("mysql:dbname=curso_php;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID");


$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo " sucesso";

?>