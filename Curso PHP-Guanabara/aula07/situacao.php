<!doctype html>
<html>
<head>
<link rel="stylesheet" href="_css/estilo.css">
<meta charset="utf-8">
<title>situações em PHP</title>
	
</head>

<body>
	<div>
		<?php
	 		$nota1 = $_GET["n1"];
			$nota2 = $_GET["n2"];
			$m = ($nota1+$nota2)/2;
			echo "A média entre $nota1 e $nota2 é $m<br/>";
			echo "A situação do aluno é ".(($m<6)?"REPROVADO":"APROVADO");
	 	?>	
	</div>
</body>
</html>
