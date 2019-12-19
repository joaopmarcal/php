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
			$sub = substr($site,-5);
			echo "$sub ";
		?>
		</form> 
	</div>
</body>
</html>
