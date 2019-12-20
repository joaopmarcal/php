<?php

    require_once __DIR__ . "/classConectar.php";
    require_once __DIR__ . "/classEstatistica.php";

    if (isset($_GET['nome']) or isset($_GET['idade']) or isset($_GET['sexo'])){
        $data = new Conectar();
        $result = $data->querySearch($_GET['nome'],$_GET['idade'],$_GET['sexo']);
    }
    //unlink("teste.php");

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
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
            <button type="submit" class="button btn btn-primary">Buscar</button>
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
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/Popper.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <?php
        $data = new Estatistica();
        $result = $data->percentageMan();
    ?>
    <h5 class="text-center">Estatistica segundo o banco de dados</h5>
    <p class="text-center">Homens</p>
    <div class="container">
        <div class="skills" style="width: <?= $result ?>%; background-color: #4CAF50;"><?= number_format($result,2) ?>%</div>
    </div>
    <?php
    $data = new Estatistica();
    $result = $data->percentageWoman();
    ?>
    <p class="text-center">Mulheres</p>
    <div class="container">
        <div class="skills" style="width: <?= $result ?>%; background-color: #2196F3;"><?= number_format($result,2) ?>%</div>
    </div>
    <?php
    $data = new Estatistica();
    $result = $data->percentageAgeCountPlus();
    ?>
    <p class="text-center">Acima ou igual a 40 anos</p>
    <div class="container">
        <div class="skills" style="width: <?= $result ?>%; background-color: #f44336;"><?= number_format($result,2) ?>%</div>
    </div>
    <?php
    $data = new Estatistica();
    $result = $data->percentageAgeCountMinus();
    ?>
    <p class="text-center">Abaixo dos 40 anos</p>
    <div class="container">
        <div class="skills" style="width: <?= $result ?>%; background-color: #808080;"><?= number_format($result,2) ?>%</div>
    </div>
</body>
</html>