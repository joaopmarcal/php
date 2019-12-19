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
			$v[0] = 4;
			$v[1] = 8;
			$v[2] = 3;
			print_r($v);
			$v2 = array(3,7,6.4,2,1,9);
			var_dump($v2);
		?>
		</form> 
	</div>
</body>
</html>
