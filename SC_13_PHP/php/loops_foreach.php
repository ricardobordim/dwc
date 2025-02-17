<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php

    // foreach especializado para Arrays e Objetos


        $itens = array('Sofa','Mesa','Cadeira','Balcao','Fogao','Geladeira');
        sort($itens);
        echo '<pre>';
            print_r($itens);
        echo '</pre>';

    // Não precisa criar variáveis ou controles para final de array;

    // foreach (Array as Variavel){}
     foreach ($itens as $item) {
        echo "$item <br>";
     }
        
    ?>
</body>
</html>
