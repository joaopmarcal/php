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
			function soma ($a,$b) {
				$s = $a + $b;
				echo "<p>A soma vale $s</p>";
			}
			soma(3,4);
			soma(8,2);
			$x = 9;
			$y = 15;
			$r = $x+$y;
			soma($x,$y);
			echo "A soma entre $x e $y é igual a $r";
		?>
		</form>
	</div>
</body>
</html>
