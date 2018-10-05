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
			$frase = "Gosto de estudar Matemática!!! matemática é muito legal";
			$novaFrase = str_ireplace("matemática","PHP",$frase);
			print($novaFrase);
		?>
		</form> 
	</div>
</body>
</html>
