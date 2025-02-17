<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        //sequenciais (numérics)
        $listaFrutas = array('Banana', 'Maçã', 'Morango', 'Uva');

        //Incluir mais um valor
        $listaFrutas[] = 'Abacaxi';

        //Pesquisa em arrays
        // in_array() - Retorna true ou false
        // array_search() - Retorna a posição do array quando encontra ou NULL
        echo '<pre>';
            print_r($listaFrutas);
        echo '</pre>';
        $existe = in_array('Maçã',$listaFrutas);

        echo '<br>';

        if ($existe) {
            echo 'Existe no Array';
        } else {
            echo 'Não existe no Array';
        }

        echo '<br>';


        $existe = array_search('Maçã',$listaFrutas);

        if ($existe != null) {
            echo 'Existe no Array, Parte II';
        } else {
            echo 'Não existe no Array, Parte II';
        }

        $listaCoisas =['frutas'=> $listaFrutas,
                       'pessoas' =>['João','Maria']];
        
        echo '<pre>';
            print_r($listaCoisas);
        echo '</pre>';
        
        echo (in_array('Uva',$listaCoisas['frutas']) ? 'Achou' : 'Não Encontrou');





    ?>
</body>
</html>
