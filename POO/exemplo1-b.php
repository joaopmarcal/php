<?php

	class Programador {
		
		public $nome;//Atributo
		public function programa(){//Método
			return "eu " .$this->nome .  " estou programando em PHP";
		}
		
	}
$php = new Programador();
$php->nome = "João Paulo";
echo $php->programa();

?>