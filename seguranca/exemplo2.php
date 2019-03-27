<?php
$id = (isset($_GET["id"]))?$_GET["id"]:1;	

$conm = mysqli_connect("localhost", "root", "", "curso_php");

$sql = "SELECT * FROM tb_usuario WHERE idusuario = '$id'";

$exec = mysqli_query($conm, $sql);
while($resul = mysqli_fetch_object($exec)){
	echo $resul->deslogin. "<br>";
}
?>
<form method="get">
	<input type="text" name="id"></input>
	<input type="submit"></input>

</form>