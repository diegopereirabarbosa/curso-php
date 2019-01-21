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

class Passaro extends Animal{
	
	public function falar(){
		
		return "Canta";
		
	}
	
	public function mover(){
		
		return "Voa e ".parent::mover();
		
	}
		
}

$pludo = new Cachorro();

echo $pludo->falar()."<br>";

echo $pludo->mover();
echo"<br> ----------------------------<br>";
$tom = new Gato();

echo $tom->falar()."<br>";

echo $tom->mover();

echo"<br> ----------------------------<br>";
$ave = new Passaro();

echo $ave->falar()."<br>";

echo $ave->mover();
?>