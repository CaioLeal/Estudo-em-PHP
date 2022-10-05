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
        $parametro = "abc";

        switch($parametro) {
            case 1:
                echo "Entro no case 1";
                break;
            
            case 2:
                echo "Entro no case 2";
                break;

            case 3:
                echo "Entro no case 3";
                break;

            default:
                echo "Entrou no Default";
                break;
        }

    ?>
</body>
</html>