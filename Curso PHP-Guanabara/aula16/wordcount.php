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
			$frase = "Eu vou estudar PHP";
			$cont = str_word_count($frase,2);
			print_r($cont);
		?>
		</form> 
	</div>
</body>
</html>
