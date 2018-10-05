<?php
	date_default_timezone_set("Brazil/East");//Função para dar o horário do servidor pois eu não consegui alterar pelo PHP.INI
	$dt = new DateTime();
	$periodo = new DateInterval("P15D");
	echo $dt -> format("d/m/Y H:i:s");
	$dt->add($periodo);
	echo "<br>";
		
	echo $dt -> format("d/m/Y H:i:s");

?>