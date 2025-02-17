<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        //comentário de uma linha



        for ($i=1; $i <= 10; $i++) { 
            if ($i ==1 || $i==6){
                continue;
            }
            echo "Linha $i <br>";

        }
        echo '<hr>';

        for ($i = 1; true; $i++) {
            if ($i == 6) {
                break;
            }
            echo "Linha $i <br>";

        }

        /*
        do {
            $x++;
            if ($x ==1 || $x==6){
                continue;
            }
            echo "Linha $x <br>";
        } while ($x <= 9);
        */
    ?>
</body>
</html>
