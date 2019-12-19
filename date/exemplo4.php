<?php
	date_default_timezone_set("Brazil/East");//Função para dar o horário do servidor pois eu não consegui alterar pelo PHP.INI
	$dt = new DateTime();
	echo $dt -> format("d/m/Y H:i:s");

?>