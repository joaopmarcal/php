<?php

	spl_autoload_register(function($class_name){
		$filename = "class".DIRECTORY_SEPARATOR.$class_name. ".php";//class é o nome da pasta que estão as classes.
		if(file_exists(($filename))){
			require_once($filename);
		}
	});

?>