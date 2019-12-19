<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="_css/estilo.css">
<title>Curso de PHP</title>
</head>

<body>
	<div>
		<form method="get" action="exercicio02.php">
		<?php
			$nome = "Joao";
			$novo = str_pad($nome,30,"5", STR_PAD_BOTH);
			print("eu sou $novo !");
		?>
		</form> 
	</div>
</body>
</html>
