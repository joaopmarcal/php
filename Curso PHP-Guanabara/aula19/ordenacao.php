<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="_css/estilo.css">
<title>Curso de PHP</title>
</head>

<body>
	<div>
		<pre>
		<?php
			$v = array("A","J","M","X","K");
			print_r($v);
			sort($v);
			print_r($v);	
		    // ordem reversa
			rsort($v);
			print_r($v);
			// asort mexe o indice também
			asort($v);
			print_r($v);
			// ordenação na ordem reversa
			arsort($v);
			print_r($v);
			// ordenação dos indices
			ksort($v);
			print_r($v);
		?>
		</pre>
	</div>
</body>
</html>
