<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <?php

    $idade =69;
    $peso  =50;

    if ((($idade >=16) && ($idade <=69)) && ($peso >=50)) {
        echo('Atende os requisitos <br>');
    } else{
        echo ('NÃO Atende os requisitos <br>');
    }
    ?>
</body>
</html>
