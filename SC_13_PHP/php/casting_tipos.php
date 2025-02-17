<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php

        //gettype() => retorna o tipo da variável

        $valor = 10;

        echo gettype($valor);

        $valor = (float) $valor;
        echo '<br>';

        echo gettype($valor);

        $valor = (string) $valor;
        echo '<br>';

        echo gettype($valor);


        $valor2='22.12';

        $valor2 = (float) $valor2;
        echo '<br>';
        echo gettype($valor2);


        $valor3 = '';

        $valor3 = (bool) $valor3;
        echo '<br>';
        echo gettype($valor3);



    ?>
    

</body>
</html>
