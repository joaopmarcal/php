<?php

abstract class Animal {
	public function falar(){
		return "som";
	}
	public function mover(){
		return "Anda";
	}	
}
class Cachorro extends Animal {
	public function falar(){
		return "late";
	}
}
class Gato extends Animal {
	public function falar(){
		return "Mia";
	}
}
class Passaro extends Animal {
	public function falar(){
		return "Canta";
	}
	public function mover(){
		return "Voa e " . parent::mover();
	}	
}
$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
$gatinho = new Gato();
echo $gatinho->falar() . "<br>";
echo "-----------------------<br>";
$passarinho = new Passaro();
echo $passarinho->falar() . "<br>";
echo $passarinho->mover() . "<br>";
?>