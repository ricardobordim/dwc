<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        //sequenciais (numéricos)
        // $listaCoisas = array();
        $listaCoisas['Frutas'] = array('Banana', 'Maça', 'Morango', 'Uva');
        $listaCoisas['Pessoas'] = ['João', 'José','Maria'];

        
        echo '<pre>';
            var_dump($listaCoisas);
        echo '</pre>';
   
        echo '<br>';


        //Array associativo, podendo ser utilizad colchetes.
        $listaComidas = [];
        $listaComidas['Comum'] = array('a'=> 'Feijão',
                              'b'=> 'Arroz',
                              'x'=> 'Massa',
                              '2'=> 'Pão');
        $listaComidas['Sobremesa'] = ['b'=>'Chantili','c'=> 'Suflê', 'x'=>'Pudim'];


        echo '<pre>';
            var_dump($listaComidas);
        echo '</pre>';

        //Associativo multimensional com sequencial
        $listaDiferente = ['Letras'=>['a','b','c'],
                           'Numeros'=>['1','2','3']];

        echo '<pre>';
            print_r($listaDiferente);
        echo '</pre>';


    ?>
</body>
</html>
