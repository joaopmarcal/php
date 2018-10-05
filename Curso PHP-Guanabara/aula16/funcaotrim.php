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
			$nome ="   jose da silva   ";
			echo(strlen($nome));
			$novo = trim($nome);
			echo($novo);
			echo(strlen($novo));
		?>
		</form> 
	</div>
</body>
</html>
