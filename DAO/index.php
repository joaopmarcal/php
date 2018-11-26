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
//$usuario = new Usuario();
//$usuario->login("joao","9875");
//echo $usuario;

// adiciona um novo usuário
//$aluno = new Usuario();
//$aluno->insert();
//echo $aluno;

//Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadById(9);
//$usuario->update("Andre","546897");
//echo $usuario;

//deletar um usuário
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
?>