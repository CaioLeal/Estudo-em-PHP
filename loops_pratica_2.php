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
        $funcionarios = [
            array("nome" => "João", "salario" => 2500), 
            array("nome" => "Maria", "salario" => 3000), 
            array("nome" => "Julia", "salario" => 2200)
        ];
        echo "<pre>";
        print_r($funcionarios);
        echo "<pre>";
        
        foreach($funcionarios as $idx => $funcionario) {
            print_r($funcionario);
        }
    ?>
</body>
</html>