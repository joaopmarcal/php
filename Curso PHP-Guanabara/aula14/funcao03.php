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
			function soma(){
				$p = func_get_args();
				$t = func_num_args();
				$s = 0;
				for($i=0; $i<$t; $i++){
					$s += $p[$i];
				}
				return $s;
			}
			$r = soma(3,5,2,6,9);
			echo " a soma dos valores é $r";
		?>
		</form>
	</div>
</body>
</html>
