<?php 
namespace Cliente;

class Cadastro extends \Cadastro{
	public function registraVenda(){
		echo "Registrado uma venda".$this->getNome();
	}
}

?>