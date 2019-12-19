<?php

    require_once __DIR__ . "/classConectar.php";

    if (isset($_GET['nome']) or isset($_GET['idade']) or isset($_GET['sexo'])){
        $data = new Conectar();
        $result = $data->querySearch($_GET['nome'],$_GET['idade'],$_GET['sexo']);
    }

    //echo $data[0]["nome"];


    //$result->fetch_array();
    //mysqli_free_result($result);
    //var_dump($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/096d1fd918.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo de Crud</title>
</head>
<body>
    <h1 class="text-center">Buscador profissional</h1>
    <h2 class="text-center">Três maneiras diferentes de se buscar</h2>
    <div>
        <h3 class="text-center"><a href="add.php" class="">Adicionar</a></h3>
        <form action="" method="get">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group col-md-4">
                    <label for="idade">Idade:</label>
                    <input type="number" class="form-control" id="idade" name="idade">
                </div>
                <div class="form-group col-md-4">
                    <label for="sexo">Sexo:</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="">selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>
                </div>
                <br>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
    <div class="space"></div>
    <?php if (isset($result)){ ?>
    <a href="index.php">limpar lista</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Sexo</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $results){ ?>
        <tr>
            <th scope="row"><?= $results['id']; ?></th>
            <td><?= $results['nome']; ?></td>
            <td><?= $results['idade']; ?></td>
            <td><?= $results['sexo']; ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php }else {
        $dataTable = Conectar::selectAll();?>
        <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Sexo</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($dataTable as $results){ ?>
    <tr>
        <th scope="row"><?= $results['id']; ?></th>
        <td><?= $results['nome']; ?></td>
        <td><?= $results['idade']; ?></td>
        <td><?= $results['sexo']; ?></td>
        <td><a href="edit.php?id=<?= $results['id']; ?>"><i class="fas fa-user-edit"></i></a></td>
        <td><a href="delete.php?id=<?= $results['id']; ?>"><i class="fas fa-trash"></i></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <?php } ?>
</body>
</html>