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
        //in_array() --> true ou false para a existencia
        //array_search() --> Retorna o indice pesquisado, caso ele exista
        $lista_frutas = ["Banana", "Maça", "Morango", "Uva"];
        echo "<pre>";
        print_r($lista_frutas);
        echo "</pre>";

        //$existe = in_array("Maça", $lista_frutas);
        echo array_search("Uva", $lista_frutas);
        /*
        if($existe) {
            echo "Sim o valor existe no Array.";
        }else {
            echo "Não existe no Array.";
        } */
    ?>
</body>
</html>