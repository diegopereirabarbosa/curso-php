<?php 

class Pessoa{
	
	public $nome; //atributo
	
	public function falar(){ //metodo
		
		return "Meu nome é ".$this->nome;
		
	}	
}
	
$Diego = new Pessoa();
$Diego->nome = "Diego Pereira";
echo $Diego->falar();
?>