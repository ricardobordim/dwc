<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        $x = 2;
        $y = '2';
        // Operadores condicionais
        // ==, ===, !=, <> , !==, <, >, <=, >=

       if ($x==$y){
            echo 'Verdadeiro' . '<br>';
        }else{
            echo 'Falso';
        }
        
        if ($x === $y) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }



    ?>
    

</body>
</html>
