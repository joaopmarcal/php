<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="_css/estilo.css">
<title>Funções Aritméticas em php</title>
	
</head>

<body>
	<div>
		<?php
			$preco = $_GET["p"];
			echo "O preço do produto é R$ ". number_format($preco,2);
		    $preco += ($preco*10/100);
			echo "<br/>E o novo preço com 10% de aumento sera R$". number_format($preco,2);
		?>
	</div>
</body>
</html>