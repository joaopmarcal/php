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
			include "funcaoprincipal.php";
				echo "<h1> Testando novas funções </h1>";
				ola();
				mostrarValor(4);
				echo "<h2>Finalizando Programa...</h2>"
		?>
		</form> 
	</div>
</body>
</html>
