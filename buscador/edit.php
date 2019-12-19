<?php

    require_once __DIR__ . "/classConectar.php";

    $id = $_GET['id'];
    $data = Conectar::selectOne($id);

    if ((isset($_POST['nome'])) or (isset($_POST['idade'])) or (isset($_POST['sexo']))){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $return = Conectar::update($nome,$idade,$sexo,$id);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo de Crud</title>
</head>
<body>
<h1 class="text-center">Editar</h1>
<div>
    <h3 class="text-center"><a href="index.php" class="">Voltar</a></h3>
    <form action="" method="post">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" value="<?= $data['nome'] ?>" id="nome" name="nome">
            </div>
            <div class="form-group col-md-4">
                <label for="idade">Idade:</label>
                <input type="number" class="form-control" value="<?= $data['idade'] ?>" id="idade" name="idade">
            </div>
            <div class="form-group col-md-4">
                <label for="sexo">Sexo:</label>
                <select name="sexo" id="sexo" class="form-control">
                    <option value="">Selecione</option>
                    <option <?php $response = ($data['sexo'] === 'masculino') ? 'selected' : "" ?> <?= $response ?> value="masculino">Masculino</option>
                    $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
                    <option <?php $response = ($data['sexo'] === 'feminino') ? 'selected' : "" ?> <?= $response ?> value="feminino">Feminino</option>
                </select>
            </div>
            <br>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
</body>
</html>