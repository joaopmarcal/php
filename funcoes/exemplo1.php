<?php
	//assim se cria uma função como você pode ver é muito fácil poi depois basta chama-la e ela será executada.
	function ola(){
		return "Olá, Mundo!<br>"; //ele te da muais liberdade de tratar o ola mundo
	}
echo ola();
$frase = ola();
echo strlen($frase); // o strlen conta os caracteres
?>