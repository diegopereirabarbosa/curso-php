<?php 
abstract class Animal{
	
	public function falar(){
		return "Som";
	}
	
	public function mover(){
		return "Anda";
	}
}

class Cachorro extends Animal{
	
	public function falar(){
		
		return "Late";
		
	}
		
}

class Gato extends Animal{
	
	public function falar(){
		
		return "Mia";
		
	}
		
}

$pludo = new Cachorro();

echo $pludo->falar()."<br>";

echo $pludo->mover();
echo"<br> ----------------------------<br>";
$tom = new Gato();

echo $tom->falar()."<br>";

echo $tom->mover();
?>