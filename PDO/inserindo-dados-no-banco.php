<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
$smtp = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "Jason";
$password = "1254786";

$smtp->bindParam(":LOGIN", $login);
$smtp->bindParam(":PASSWORD", $password);

$smtp->execute();

echo "Inserido OK!";
?>