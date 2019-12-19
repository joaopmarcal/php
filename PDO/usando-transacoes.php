<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
$conn->beginTransaction(); // inicia uma transação
$smtp = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 6;

$smtp->execute(array($id));
//$conn->rollBack(); // cancela se der errado
$conn->commit(); // confirma se der certo
echo "Dado Excluido!";
?>