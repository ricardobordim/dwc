<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        
        $sorteio =[];

        
        do {
            if (in_array(rand(1,60),$sorteio)) {
                continue;
            }else {
                array_push($sorteio,rand(1,60));
            }
        } while (count($sorteio) < 6);

        echo '<pre>';
            print_r($sorteio);
        echo '</pre>';

        echo '<hr>';
        $numeros = array();

        while (count($numeros) <=5){

            $num = rand(1,60);

            if (!in_array($num,$numeros)){
                $numeros[]=$num;
            }
        }

        echo '<pre>';
        print_r($sorteio);
        echo '</pre>';

        echo '<hr>';

    ?>
</body>
</html>
