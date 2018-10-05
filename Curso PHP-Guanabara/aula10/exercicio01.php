<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="_css/estilo.css">
<title>Curso de PHP</title>
</head>

<body>
	<div>
		<?php
			$n = isset($_GET["num"])?$_GET["num"]:0;
			$o = isset($_GET["oper"])?$_GET["oper"]:1;
			switch ($o){
				case 1:
					$r = $n * 2;
					break;
				case 2:
					$r = pow($n,3);
					break;
				case 3:
					$r = sqrt($n);
			}
				echo "O resultado da operação solitada foi <span class='foco'>$r</span>";
		?>	
		<a href="exercicio01.html">Voltar</a>
	</div>
</body>
</html>