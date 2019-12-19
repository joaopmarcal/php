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
			$frase = "Estou aprendendo PHP no curso em video de PHP";
			$cont = substr_count($frase,"PHP");
			print("PHP encontrado $cont vezes");
		?>
		</form> 
	</div>
</body>
</html>
