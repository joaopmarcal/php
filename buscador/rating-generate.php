<?php

    require __DIR__ . "/classRating.php";

    if (isset($_POST['marcado'])){
        echo $_POST['marcado'];
        $rating = new Rating();
        $rating->ratingGenerateFive();
    }elseif (isset($_POST['gerar'])){
        $cont = $_POST['gerar'];
        $rating = new Rating();
        $rating->ratingGenerate($cont);
    }

    if (isset($_GET['e']) and $_GET['e'] == 'destroy'){
        $rating = new Rating();
        $rating->truncateTable();
    }

?>
<!doctype html>
<html lang="en">
<head>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/096d1fd918.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exemplo de Crud</title>
    </head>
</head>
<body>
<form class="form-inline" action="rating-generate.php?1=1" method="post">
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Gerar números de Rating</label>
    <select class="custom-select my-1 mr-sm-2" name="gerar" id="inlineFormCustomSelectPref myInput">
        <option selected>Escolher...</option>
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="150">150</option>
        <option value="250">250</option>
        <option value="500">500</option>
    </select>
    <button class="btn btn-danger margin" onclick="document.getElementById('myInput').value = ''">Clear</button>
    <div class="custom-control custom-checkbox my-1 mr-sm-2">
        <input type="checkbox" name="marcado" class="custom-control-input" id="customControlInline">
        <label class="custom-control-label" for="customControlInline">Gerar apenas 50 ratings 5 estrelas</label>
    </div>
    <button type="submit" class="btn btn-primary my-1">Gerar</button>
</form>
<a href="rating.php">Voltar</a>|
<a href="rating-generate.php?e=destroy">apagar Banco</a>
</body>
</html>