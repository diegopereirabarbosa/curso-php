<?php 
$cep = "13033210";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$resonse = curl_exec($ch);

curl_close($ch);

$data = json_decode($resonse, true);

//print_r($data);
echo"<h1>Endereço buscado na API ViaCep</h1><br>
	<b>Rua:</b> ".$data["logradouro"]."<br>
	<b>Bairro:</b> ".$data["bairro"]."<br>
	<b>Cep:</b> ".$data["cep"]."<br>
	<b>Cidade:</b> ".$data["localidade"]."<br>
	<b>UF:</b> ".$data["uf"]."<br>";

//echo "Movido com sucesso."
?>
