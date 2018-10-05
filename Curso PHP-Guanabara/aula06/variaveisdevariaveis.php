<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="_css/estilo.css">
<title>Referencia em PHP</title>
	
</head>

<body>
	<div>
		<?php
		 	$x = "abc";
			$$x = "def";
			echo "O conteúdo da variável X é $x";
			echo "<br/>A variavel ABC criada recebeu o valor $abc";
		?>
	</div>
</body>
</html>