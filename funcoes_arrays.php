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
        /*$array = array();
        $retorno = is_array($array);

        if($retorno) {
            echo "Sim é um Array";
        }else {
            echo "Não é um Array";
        } */
        /*
        $array = [1 => "a", 7 => "b", 18 => "c"];
        echo "<pre>";
            print_r($array);
        echo "<prev>";

        $chaves_array = array_keys($array);
        echo "<pre>";
            print_r($chaves_array);
        echo "<prev>"; */
        $array = array("teclado", "Mouse", "cabo HDMI", "Gabinete", "Fonte RTX");
        echo "<pre>";
            print_r($array);
        echo "<prev>";

        sort($array);
        echo "<pre>";
            print_r($array);
        echo "<prev>";
    ?>
</body>
</html>