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
			$m = array( array(6,4),array(4,9),array(3,2));
			$m[0][1] = $m[2][0];
			print_r($m);
			

		?>
		</pre>
		</form> 
	</div>
</body>
</html>
