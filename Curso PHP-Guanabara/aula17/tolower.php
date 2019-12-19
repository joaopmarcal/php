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
			$nome = "Gustavo Guanabara";
			$nome2 = strtolower($nome);
			echo "Seu nome e $nome2";
		?>
		</form> 
	</div>
</body>
</html>
