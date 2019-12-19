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
			$nome = "gustavo guanabara";
			$nome2 = ucfirst(strtolower($nome));
			echo "Seu nome é $nome2";
		?>
		</form> 
	</div>
</body>
</html>
