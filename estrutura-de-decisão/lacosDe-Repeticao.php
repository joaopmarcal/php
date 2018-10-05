<?php

	for($i = 0; $i <= 1000; $i += 5) {
		
		if($i > 200 && $i < 800) continue; // não deixa aparecer de 200a 800.
		
		if($i === 900) break;  //para a estrutura de repetição
		
		echo $i . "<br>";
		
	}

?>