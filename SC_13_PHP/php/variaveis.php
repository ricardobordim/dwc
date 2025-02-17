<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        // string;

        $nome = 'String';
        $inteiro = 50;
        $flutuante = 66.5;
        $boleano = true;


        // Por ser uma linguagem de tipagem fraca é possível alterar o tipo de dado da variável.

        $inteiro = '50';

        

    ?>
    <h1>Ficha Cadastral</h1>
    <br>
    <p>Nome: <?=$nome?></p>
    <p>Idade: <?=$inteiro?></p>
    <p>Peso: <?=$flutuante?></p>
    <p>Fumante: <?=$boleano?></p>

</body>
</html>
