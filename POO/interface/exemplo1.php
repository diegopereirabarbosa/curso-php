<?php 

interface Veiculo{
	
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculo{
	
	public function acelerar($velocidade){
		
		echo "O veiculo acelerou até ".$velocidade."km/h";
	}
	
	public function freiar($velocidade){
		
		echo "O veículo frenou até ".$velocidade." km/h";
		
	}
	
	public function trocarMarcha($marcha){
		
		echo "O veiculo engatou a marcaha";
		
	}
}

$carro= "New Civic";

?>