<?php

    echo $nome = $_GET['nome'];
    echo PHP_EOL;
    echo $idade = $_GET['idade'];
    echo PHP_EOL;
    echo $sexo = $_GET['sexo'];
    echo PHP_EOL;
    require_once __DIR__ . "/classConectar.php";
    if($sexo == ""){
        echo "está vazio";
    }

    $conexao = new Conectar("localhost","pessoa","joao","joao");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo de Crud</title>
</head>
<body>
    <h1>Buscardor profissional</h1>
    <a href="">Adicionar</a>
    <form action="" method="get">
        NOME: <input type="text" name="nome">
        <br>
        IDADE: <input type="number" name="idade">
        <br>
        SEXO: <input type="text" name="sexo">
        <br>
        <input type="submit" value="buscar">
    </form>
</body>
</html>