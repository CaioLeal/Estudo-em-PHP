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
        $itens = ["sofa", "mesa", "cadeira", "fogão", "geladeira"];
        echo "<pre>";
        print_r($itens);
        echo "<prev>";

        foreach($itens as $item) {
            echo "$item <br>";

            if($item == "mesa") {
                echo "(*compre uma mesa e ganhe 25% de desconto em 4 cadeiras)";
            }
            echo "<br>";
        }
    ?>
</body>
</html>