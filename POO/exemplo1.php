<?php

	class Pessoa {
		
		public $nome;//Atributo
		public $idade;
		
		public function falar(){//Método
			
			return "O meu nome é ".$this->nome;
			
		}
		public function idade(){
			return "A minha idade é ".$this->idade;
		}
		
	}
$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();
echo '<br>';
$glaucio->idade = "19";
echo $glaucio->idade();
?>