<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <pre>
<?php

    $teste = '/[^0-9]/';
    preg_match($teste,'89',$matches);
    if ($matches){
        echo "oi";
    }

    preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
    print_r($matches);

    if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
        echo "A match was found.";
    } else {
        echo "A match was not found.";
    }

    echo "<br>";

    $search = "oi";
    $replace = "sim";
    $subject = "oi joao";

    $result = str_replace($search,$replace,$subject);
    echo $result;
    echo "<br>";

    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
    echo $onlyconsonants;

    echo "<br>";
    echo "##################################################";
    echo "<br>";

    function resolve($route){
        $path = '/^http:\/\/informaticademais.esy.es\/faleconosco$/';
        $route = '/^' . str_replace('/','\/',$route) . '$/';
        var_dump($path,$route);
        if (preg_match($route, $path, $params)){
            echo "oi";
            return $params;
        }
        return false;

    }

    var_dump(resolve('http://informaticademais.esy.es/faleconosco'));
    $cpf = '411.494.128/28';
    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    echo $cpf;
    echo "<br>";
    echo $cont = strlen($cpf);

?>
    </pre>
</div>
</body>
</html>
