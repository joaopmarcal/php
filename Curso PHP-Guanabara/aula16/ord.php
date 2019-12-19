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
			$letra = "C";
			$cod = ord($letra);
			print("A letra $letra tem código $cod");
		?>
		</form> 
	</div>
</body>
</html>
