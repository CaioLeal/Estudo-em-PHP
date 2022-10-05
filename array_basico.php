<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        //sequenciais (Numericos)
        $lista_frutas = ["Banana", "Maçã", "Morango", "Uva"];
        /*
        echo "<pre>";
        var_dump($lista_frutas);
        echo "<pre>";
        print_r($lista_frutas); */
        echo $lista_frutas[0];
        echo "<br>";
        //Associativos
        $lista_frutas2 = [
            "a" => "Banana",
            "b" => "Maçã", 
            "1" =>"Morango",
            "1" => "Uva"];
            echo "<pre>";
            var_dump($lista_frutas2);
            echo $lista_frutas["1"];
    ?>
</body>
</html>