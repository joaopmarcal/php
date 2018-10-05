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
			$a = isset($_GET["ano"])?$_GET["ano"]:1900;
			$i = date("Y") - $a;
			echo "Você nasceu em $a e tem $i anos<br/>";
			if($i >= 18){
				$v = "Já pode votar";
				$d = "Já pode dirigir";	
			}
			else{
				$v = "não pode votar";
				$d = "não pode dirigir";	
			}
			echo "Com essa idade você $v e também $d";
		?>	
		<a href="exercicio01.html">Voltar</a>
	</div>
</body>
</html>