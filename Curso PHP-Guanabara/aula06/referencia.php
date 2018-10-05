<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="_css/estilo.css">
<title>Referência em PHP</title>
	
</head>

<body>
	<div>
		<?php
		 	$a = 3;
			$b = &$a;
			$b += 5;
			echo "A variavel A vale $a";
			echo "<br>A variavel B vale $b";
				
		?>
	</div>
</body>
</html>