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
			$c = 15;
			while($c >= 1){
				echo $c. "<br>";
				$c-=1;
			}
				
		?>	
		<br/><a href="javascript:history.go(-1)">Voltar</a>
	</div>
</body>
</html>