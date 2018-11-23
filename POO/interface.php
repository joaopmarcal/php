﻿<?php

interface Veiculo {
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}
class Civic implements Veiculo {
	public function acelerar($velocidade){
		echo "O veiculo acelerou ".$velocidade . " KM/h";
	}
	public function freiar($velocidade){
		echo "O veiculo frenou até  ".$velocidade . " KM/h";
	}
	public function trocarMarcha($marcha){
		echo "O veiculo engatou a marcha ".$marcha;
	}
}

$carro = new Civic();
$carro->trocarMarcha(1);
?>