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
			//array_push adiciona uma váriavel para o array
			array_push($v, "O");
			print_r($v);
			// array_pop elimina o ultimo valor do vetor
			array_pop($v);
			array_pop($v);
			print_r($v);

		?>
		</pre>
	</div>
</body>
</html>
