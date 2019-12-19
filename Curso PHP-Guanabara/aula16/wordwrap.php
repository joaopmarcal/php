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
			$t = "aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função WordWrap";
			$r = wordwrap($t, 5, "<br/>\n ", true);
			echo $r;
		?>
		</form> 
	</div>
</body>
</html>
