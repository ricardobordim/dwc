<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        $x = 13;

     

        echo "O valor de x é $x <br>";
        echo 'O valor de x é '. ++$x . '<br>';
        echo 'O valor de x é ' . $x++ . '<br>';
        echo 'O valor de x é ' . $x . '<br>';

        echo '<hr>';
        $x=10;
        echo "O valor de x é $x <br>";
        echo 'O valor de x é ' . --$x . '<br>';
        echo 'O valor de x é ' . $x-- . '<br>';
        echo 'O valor de x é ' . $x . '<br>';


    ?>
</body>
</html>
