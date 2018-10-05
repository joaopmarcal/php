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
			$frase = "Estou aprendendo PHP";
			$pos = stripos($frase, "php");
			echo "$frase <br>A string foi encontrada na posicao $pos";
			// o zero conta
			// não funciona se a palavra estiver em minuscula.
		?>
		</form> 
	</div>
</body>
</html>
