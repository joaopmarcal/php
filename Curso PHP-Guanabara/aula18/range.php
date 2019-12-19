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
		<pre>
		<?php
			$n = range(4,20,2);
			$n[] = 7;
			print_r($n);
		?>
		</pre>
		</form> 
	</div>
</body>
</html>
