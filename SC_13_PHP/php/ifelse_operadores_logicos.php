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
        // Operadores Lógicos
        // AND &&, tudo tem que ser verdadeiro
        // OR ||, Se pelo menos um dos resultados for verdadeiro
        // XOR, se uma das expressões for verdadeira e a outra falsa
        // !, Inverte o resultado a expressão



       if ($x==$y && 10>3){
            echo 'Verdadeiro' . '<br>';
        }else{
            echo 'Falso';
        }
        
        if ($x === $y || 10>3) {
            echo 'Verdadeiro' .'<br>';
        } else {
            echo 'Falso';
        }

        if ($x === $y XOR 10 > 3) {
            echo 'Verdadeiro' . '<br>';
        } else {
            echo 'Falso';
        }
        if (!false) 
            echo 'Verdadeiro'


    ?>
    

</body>
</html>
