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
			$site = "Curso em Video";
			$vetor = explode(" ",$site);
			print_r($vetor);
		?>
		</form> 
	</div>
</body>
</html>
