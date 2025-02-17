<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php

        $valor = 7.3;

        // arredonda para cima
        echo "$valor <br>";
        echo ceil($valor) . '<br>';

        echo '<hr>';


        // arredonda para baixo
        echo "$valor <br>";
        echo floor($valor) . '<br>';

        echo '<hr>';

        // arredonda por proximidade
        echo "$valor <br>";
        echo round($valor) . '<br>';

        echo '<hr>';

        // Múmero randômico

        echo "$valor <br>";
        echo rand(1,9) . '<br>';
        echo getrandmax();


        echo '<hr>';

        // Raíz quadrada
        echo "$valor <br>";
        echo sqrt(5) . '<br>';




    ?>
    

</body>
</html>
