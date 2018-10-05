<?php
	session_id('kp8537cv8s6j1vcru6qbtebli6');
	require_once("config.php");
	
	session_regenerate_id();
	echo session_id();
	var_dump($_SESSION);
?>