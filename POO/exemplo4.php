<?php

	class Endereco {
		private $logradouro;
		private $numero;
		private $cidade;
		
		public function __construct($a, $b, $c){
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
		}
		public function __destruct(){
			//var_dump("destruir");
		}
		public function __toString(){
			return $this->logradouro.",".$this->numero." - ".$this->cidade;
		}
	}

$meuendereco = new Endereco("av aguia de haia", "2100", "São Paulo");
echo($meuendereco) ;
//unset($meuendereco);

?>