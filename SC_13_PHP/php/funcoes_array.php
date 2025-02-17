<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        $array = 'Texto';
        $retorno = is_array($array);

        if ($retorno){
            echo 'É Array';
        }else {
            echo 'Não é Array';
        }
        echo '<br>';
        
        echo '<hr>';
        
        $array = ['Texto','Frases'];
        $retorno = is_array($array);

        if ($retorno) {
            echo 'É Array';
        } else {
            echo 'Não é Array';
        }
        echo '<br>';


        echo '<hr>';

        $array = [1 => 'a', 7=>'Texto', 18=>'Frases'];


        echo '<pre>';
            print_r($array);
        echo '</pre>';

        // Extrai as chaves do array para outro array
        $chaves = array_keys($array);
        echo '<pre>';
            print_r($chaves);
        echo '</pre>';

        $array = ['Texto', 'Frases', 'Paragrafo','Linha', 'Título','Margen'];
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        // Ordena o Array
        sort($array);
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        $array = ['Texto', 'Frases', 'Paragrafo', 'Linha', 'Título', 'Margen'];
        // Ordena o array preservando os indices
        asort($array);
        echo '<pre>';
            print_r($array);

            // Contar os elementos de um array
            echo 'Quantidade de elementos no array = '. count($array);
        echo '</pre>';


        // Fusão de arrays

        $array1 = ['Café','Leite','Bolacha', 'Margarina','Ovo Cozido','Amendoin em Pasta', 'Pão'];
        $array2 = ['Feijão', 'Arroz', 'Cenoura','Salada','Café Preto'];
        
        // Quantos arrays existirem
        $grupoArray = array_merge($array,$array1,$array2);
        echo '<pre>';
            print_r($grupoArray);
        echo '</pre>';

        $string = "26/04/2018";

        // separa a string para um array segundo um delimitador
        echo 'Data = '. $string . '<br>';
        echo '<pre>';
            print_r(explode('/', $string));
        echo '</pre>';

        // Transforma em uma string o array.
        $string_retorno = implode('";" ',$array1);
        
        
        echo "O Retorno da Implosão foi =" .'"' . $string_retorno . '"' . "<br>"





    ?>
</body>
</html>
