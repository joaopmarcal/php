<?php

	$a = 10;
	
	function trocaValor($a){
		$a += 50;
		return $a;
	}
echo trocaValor($a);// aqui o valor da 60 pois ésta é a função trocaValor.
echo "<br>";
echo $a;// esta é a função $a
// as duas funções são diferentes.

//passagem de parâmetro por referência
/*	$a = 10;
	
	function trocaValor(&$a){ //a única diferença é o & comercial dentro dos parametros.
		$a += 50;
		return $a;
	}
echo trocaValor($a);
echo "<br>";
echo $a; $a
*/

?>