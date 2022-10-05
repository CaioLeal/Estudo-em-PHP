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
        $num = 1;
        echo "Inicio do Loop <br>";

        while($num < 1000) {
            echo "$num <br>";
            $num+=5; //criterio de parada
            if($num > 100) {
                break;
            }      
        }
        echo "Fim do Loop";
    ?>
</body>
</html>