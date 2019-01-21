<?php 

class Documento {
	
	private $numero;
	
	public function getNumero(){
		return $this->numero;
	}
	
	public function setNumero($n){
		$this->numero = $n;
	}
}

class CPF extends Documento{
	
	public function validar():bool{
		
		$numeroCPF = $this->getNumero();
		
		if(strlen($numeroCPF) != 11){
			echo "Cpf invalido";
		}else{
			echo "O CPF é valido";
		}
		return true;
	}
}

$doc = new CPF();

$doc->setNumero("123454678112");

$doc->validar();

echo "<br>";

echo $doc->getNumero();
echo "<br>";
$a = 30;
$b = 12;

echo $a % $b;
?>