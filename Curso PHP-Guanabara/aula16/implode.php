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
			$vetor[0] = "Curso";
			$vetor[1] = "em";
			$vetor[2] = "Vídeo";
			$texto = implode("#", $vetor);
			print($texto);
		?>
		</form> 
	</div>
</body>
</html>
