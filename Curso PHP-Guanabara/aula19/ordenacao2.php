<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="_css/estilo.css">
<title>Curso de PHP</title>
</head>

<body>
	<div>
		<pre>
		<?php
			$v = array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
			// ordenação dos indices
			ksort($v);
			print_r($v);
			// ordenação dos indices reverso
			krsort($v);
			print_r($v);
		?>
		</pre>
	</div>
</body>
</html>
