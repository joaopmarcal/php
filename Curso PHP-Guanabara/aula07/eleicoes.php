<!doctype html>
<html>
<head>
<link rel="stylesheet" href="_css/estilo.css">
<meta charset="utf-8">
<title>Exercícios de eleições em PHP</title>
	
</head>

<body>
	<div>
		<?php
	 		$ano = $_GET["an"];
			$idade = 2018 - $ano;
			echo "Quem nasceu em $ano tem idade de $idade anos";
			$tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
			echo "<br/>E dessa forma seu voto é $tipo";
	 	?>	
	</div>
</body>
</html>
