<?php 

$file = fopen("log.txt", "a+");

fwrite($file, date("d-m-y H:i:s")."\r\n");
fclose($file);
echo"Arquivo criado com sucesso";

?>