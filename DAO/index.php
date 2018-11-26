<?php

require_once("config.php");
//carrega um usuário apenas
//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário
$usuario = new Usuario();
$usuario->login("joao","9875");
echo $usuario;
?>