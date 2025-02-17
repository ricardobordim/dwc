<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        //sequenciais (numérics)
        $listaFrutas = array('Banana', 'Maça', 'Morango', 'Uva');

        //Incluir mais um valor
        $listaFrutas[] = 'Abacaxi';

        echo '<pre>';
            var_dump($listaFrutas);
        echo '</pre>';
   
        echo '<br>';
   
        echo '<pre>';
             print_r($listaFrutas);
        echo '</pre>';
        echo '<br>';

        //Outra forma de declarar o array
        $listaLegumes = ['Brócolis', 'Cenoura', 'Repolho', 'Beteraba'];
        echo '<pre>';
            var_dump($listaLegumes);
        echo '</pre>';
        echo "Lista de Legumes, na posição 2 =  $listaLegumes[2]";

        //Array associativo, podendo ser utilizad colchetes.
        $listaComidas = array('a'=> 'Feijão',
                              'b'=> 'Arroz',
                              'x'=> 'Massa',
                              '2'=> 'Pão');

        $listaComidas['w'] = 'Polenta';
        echo '<pre>';
            var_dump($listaComidas);
        echo '</pre>';



    ?>
</body>
</html>
