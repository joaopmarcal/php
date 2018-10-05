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
		<pre>
		<?php
			$c = range(5,20,2);
			foreach($c as $v){
				echo "$v ";
			}
		?>
		</pre>
		</form> 
	</div>
</body>
</html>
