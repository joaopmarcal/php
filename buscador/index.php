<?php

    require_once __DIR__ . "/classConectar.php";

    if (isset($_GET['nome']) or isset($_GET['idade']) or isset($_GET['sexo'])){
        $data = new Conectar();
        $data->query($_GET['nome'],$_GET['idade'],$_GET['sexo']);

    }




    if($sexo == ""){
        //echo "está vazio";
    }
    //$data = Conectar::selectAll();
    //echo $data['nome'];
    //$mysqli = new mysqli("localhost", "joao", "joao", "pessoa");
    //$mysqli = new Conectar("localhost","pessoa","joao","joao");
    //echo $data[0]["nome"];
    //$query = "select * from buscador where nome = 'joao' and idade = 18 and sexo = 'masculino'";
    //$result = $mysqli->query($query);
    //$result = $mysqli->query("select * from buscador where nome = 'joao' and idade = 18 and sexo = 'masculino'");


    //$result->fetch_array();
    //mysqli_free_result($result);
    //var_dump($result);


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