<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $texto = "curso completo de PHP <br>";
        //string lower
        echo $texto;
        echo strtolower($texto);

        echo "<hr>";
        //string to upper
        echo $texto;
        echo strtoupper($texto);

        echo "<hr>";
        //string to case first
        echo $texto;
        echo ucfirst($texto);

        echo "<hr>";
        //string to length
        echo $texto;
        echo strlen($texto);

    ?>
</body>
</html>