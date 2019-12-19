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
			//chaves personalizadas
			/*$v = array( 3=>5,
					    1=>9,
					    0=>8,
					    7=>7);
			unset($v[0]);
			print_r($v);*/
			//Chaves associativas
			/*$v = array("nome" => "Ana", "idade" => 23, "peso" => 65.5 );
			$v["fuma"] = true;
			print_r($v);*/
			// For Each
			$v = array("nome" => "Ana", "idade" => 23, "peso" => 65.5 );
			foreach($v as $k => $c){
				echo "<br>O campo $k possui o conteudo $c<br>";
			}

		?>
		</pre>
		</form> 
	</div>
</body>
</html>
