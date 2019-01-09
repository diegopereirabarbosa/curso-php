<?php 
echo"<select>";
for ($i = date("Y"); $i > date("Y")-100; $i--){
	echo "<option>$i </option>";
}
echo"</select><br>";

$data = date("d/m/Y");
$hora = date("h:i:s");
echo $data, " e ", $hora;
?>