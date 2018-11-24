<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("João Paulo");
$cad->setEmail("paulospc21@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();
?>