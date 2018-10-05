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
			function teste(&$x){
				$x += 2;
				echo "<p>O valor de x é $x</p>";
				}
				$a = 3;
				teste($a);
			
				echo "<p> O valor de A é $a</p>";
		?>
		</form>
	</div>
</body>
</html>
