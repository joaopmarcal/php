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
			$p = "Leite";
			$pr = 4.5;
			//echo "O $p custa R$ " . number_format($pr,2) ;
			printf ("O %s custa R$ %.2f", $p,$pr);
		?>
		</form> 
	</div>
</body>
</html>
