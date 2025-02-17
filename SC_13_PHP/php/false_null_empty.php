<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        //sequenciais (numérics)
       $funcionario1 = null;
       $funcionario2 ='';
       $funcionario3=false;

    //Valor null
    echo (is_null($funcionario1) ? 'Nulo' : 'Não é Nulo');
    echo '<br>';
    // Valor vazio
    echo (is_null($funcionario2) ? 'Nulo' : 'Não é Nulo');

    echo '<hr>';
    echo (empty($funcionario1) ? 'Vazio' : 'Não é Vazio');
    echo '<br>';
    // Valor vazio
    echo (empty($funcionario2) ? 'Vazio' : 'Não é Vazio');


    echo '<hr>';
    echo (is_null($funcionario3) ? 'Mulo' : 'Não é Nulo');
    echo '<br>';
    // Valor vazio
    echo (empty($funcionario3) ? 'Vazio' : 'Não é Vazio');


    ?>
</body>
</html>
