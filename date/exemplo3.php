<?php
	date_default_timezone_set("Brazil/East");//Função para dar o horário do servidor pois eu não consegui alterar pelo PHP.INI
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
	echo ucwords(strftime("%A %B %H"));

?>