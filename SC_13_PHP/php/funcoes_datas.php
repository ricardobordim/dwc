<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php

        $valor = 7.3;

        echo date('d/m/Y H:i');

        echo ('<br>');

        //Qual o timezone da minha aplicação
        echo date_default_timezone_get();

        // Posso configurar no PHP.ini ou por aplicação

        date_default_timezone_set('America/Sao_Paulo');
        echo ('<br>');

        echo date_default_timezone_get();
        echo date('d/m/Y H:i');

        echo ('<br>');


        //Lembre para calcular sempre utilize o padrão americano
        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';

        //timestamp 01/01/1970.

        $time_inicial = strtotime($data_inicial);
        $time_final   = strtotime($data_final);

        $segundos_do_dia = 24 * 60 *60;

        echo ('<br>');
        echo 'A diferença de segundos entre as datas é =  ' . ($time_final - $time_inicial);
        
        // Usando o absoluto para transformar número negativos abs()
        echo ('<br>');
        echo 'A diferença em dias entre as datas é =  ' . (abs($time_final - $time_inicial) / $segundos_do_dia);







    ?>
    

</body>
</html>
