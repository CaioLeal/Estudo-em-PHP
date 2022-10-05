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
        //String
        $nome = "Caio Leal";
        //Int
        $idade = 18;
        //Float
        $peso = 82.5;
        //Boolean
        $fumante_sn = true;
    ?>
    <h1>Ficha cadastral</h1>;
    <br>
    <p>Nome: <?= $nome ?></p>;
    <p>Idade: <?= $idade ?></p>;
    <p>Peso: <?= $peso ?></p>;
    <p>Fumante: <?= $fumante_sn ?></p>;
</body>
</html>