<?php
	date_default_timezone_set("Brazil/East");//Função para dar o horário do servidor pois eu não consegui alterar pelo PHP.INI
	//$ts = strtotime("2001-09-11");
	$ts = strtotime("+1 week");
	echo date("l,d/m/Y", $ts);
?>