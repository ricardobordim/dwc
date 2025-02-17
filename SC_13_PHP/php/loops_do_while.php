<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        //comentário de uma linha

        $x=0;
        do {
            $x++;
            if ($x ==1 || $x==6){
                continue;
            }
            echo "Linha $x <br>";
        } while ($x <= 9);

    ?>
</body>
</html>
