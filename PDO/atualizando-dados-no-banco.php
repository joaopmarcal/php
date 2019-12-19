<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
$smtp = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Serafim";
$password = "101010";
$id = 6;

$smtp->bindParam(":LOGIN", $login);
$smtp->bindParam(":PASSWORD", $password);
$smtp->bindParam(":ID", $id);

$smtp->execute();

echo "Dados Alterados!";
?>