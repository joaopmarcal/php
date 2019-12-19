<?php

	function ola($texto = "mundo", $periodo = "Bom Dia"){ // se ele não tiver valor padrão acabara por dar erro na execução.
		echo "olá, $texto! $periodo<br>";
	}

echo ola("");//sem parametros não seria escrito nada posteriormente.
echo ola("mundo", "Boa noite");
echo ola("Glaucio", "Boa tarde");
echo ola("João", "");
//o texto é passado por parametro.

?>