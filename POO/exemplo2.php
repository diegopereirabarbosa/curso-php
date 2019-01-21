<?php 

class Carro {
	
	private $modelo;
	private $motor;
	private $ano;
	
	public function getModelo(){
		return $this->modelo;
	}
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
	
	public function getMotor(){
		return $this->motor;
	}
	
	public function setMotor($motor){
		$this->motor = $motor;
	}
	public function getAno(){
		return $this->ano;
	}
	
	public function setAno($ano){
		$this->ano = $ano;
	}
	
	public function exibir(){
		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ANo"=>$this->getAno()
		);
	}
}
$gol = new Carro();
$gol->setModelo("Gol Quadrado");
$gol->setMotor("1.6");
$gol->setAno("1998");

var_dump($gol->exibir());

?>