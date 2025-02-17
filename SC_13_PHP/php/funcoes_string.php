<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php

        $texto = 'Curso Completo de PHP';

        // String to lower
        echo "$texto <br>";
        echo strtolower($texto) . '<br>';

        echo '<hr>';


        // String to upper
        echo "$texto <br>";
        echo strtoupper($texto) . '<br>';

        echo '<hr>';

        // String to first
        echo "$texto <br>";
        echo ucfirst($texto) . '<br>';

        echo '<hr>';

        // String to Length

        echo "$texto <br>";
        echo strlen($texto) . '<br>';


        echo '<hr>';

        // String to replace
        echo "$texto <br>";
        echo str_replace('PHP','JavaScript',$texto) . '<br>';


        echo '<hr>';

        // String to substr
        echo "$texto <br>";
        echo substr($texto,0,5) . '<br>';




    ?>
    

</body>
</html>
