<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        //comentário de uma linha

        $registros = [['titulo' =>'Titulo Notícia 1','conteudo'=> 'Conteudo Notícia 1'],
                      ['titulo' =>'Titulo Notícia 2','conteudo'=> 'Conteudo Notícia 2'],
                      ['titulo' =>'Titulo Notícia 3','conteudo'=> 'Conteudo Notícia 3'],
                      ['titulo' =>'Titulo Notícia 4','conteudo'=> 'Conteudo Notícia 4']
                    ];

        echo '<pre>';
            print_r($registros);
        echo '</pre>';

        $i=0;
        while ($i < count($registros)) {

            echo '<h3>' . $registros[$i]['titulo'] .'</h3>';
            echo '<p>' . $registros[$i]['conteudo'] . '</p>';

            $i++;
        }

        echo '<h1>'. 'Do While'. '</h1>';
        $i = 0;
        do {
            

            echo '<h3>' . $registros[$i]['titulo'] . '</h3>';
            echo '<p>' . $registros[$i]['conteudo'] . '</p>';
            $i++;

        } while ($i < count($registros));

        
        echo '<h1>' . 'For' . '</h1>';

        for ($i=0; $i < count($registros); $i++) { 
            echo '<h3>' . $registros[$i]['titulo'] . '</h3>';
            echo '<p>' . $registros[$i]['conteudo'] . '</p>';

        }
        
       

    ?>
</body>
</html>
