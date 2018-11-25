<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
$smtp = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 6;

$smtp->bindParam(":ID", $id);

$smtp->execute();

echo "Dado Excluido!";
?>