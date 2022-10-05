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
        $registros = [
            array("Titulo" => "Titulo noticia1", "Conteudo" => "Conteudo1"),
            array("Titulo" => "Titulo noticia2", "Conteudo" => "Conteudo2"),
            array("Titulo" => "Titulo noticia3", "Conteudo" => "Conteudo3"),
            array("Titulo" => "Titulo noticia4", "Conteudo" => "Conteudo4"),
        ];

        echo "<pre>";
        print_r($registros);
        echo "</pre>";


        $idx = 0;

        //Count => conta a quantidade de elementos em Array
        while($idx <count ($registros)) {
            echo "<h3>" . $registros[$idx]["Titulo"] . "</h3>";
            echo "<p>" . $registros[$idx]["Conteudo"] . "</p>";

            echo "<hr>";
            $idx++;
        } 
    ?>
</body>
</html>