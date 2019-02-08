<?php 
$conn = new PDO("mysql:dbname=curso_php;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ?");


$id = 7;

$stmt->execute(array($id));

echo " sucesso delete";

$conn->rollBack();

echo " Voltou";

?>