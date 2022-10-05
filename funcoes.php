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
        //Void(sem retorno)
        function exibirBoasVindas() {
            echo "Bem vindo ao curso de PHP!<br>";
        }

        exibirBoasVindas();
        //
        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }

        echo calcularAreaTerreno(30,50);
    ?>
</body>
</html>