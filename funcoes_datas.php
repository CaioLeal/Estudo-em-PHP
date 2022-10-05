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
        //recuperação data atual / data corrente
        /*echo date("d/m/Y h:i");

        //
        echo "<br>";
        echo date_default_timezone_get();
        echo date_default_timezone_set("America/Sao_Paulo");
        echo "<br>";
        echo date("d/m/Y h:i"); */

        $data_inicial = "2022-04-17";
        $data_final = "2022-08-17";

        //timestamp
        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . "-" . $time_inicial;
        echo "<br>";
        echo $data_final . "-" . $time_final;

        $diferenca_times = $time_final - $time_inicial;
        echo "<br>";
        echo "A diferença de segundos entre a data inicial e final é " . $diferenca_times;

        $segundos_dia = 24*60*60;
        echo "<br>";
        echo "Um dia possui " . $segundos_dia . " segundos";

        $diferencas_data = $diferenca_times / $segundos_dia;
        echo "<br>";
        echo "A diferença em dias é: " . $diferencas_data;
    ?>
</body>
</html>