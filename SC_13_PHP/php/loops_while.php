<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        $num =1;
        while ($num <= 10) {
            echo "Linha $num <br>";
            $num++;
            if ($num >8){
                break;
            }else {
                // lembrar que o continue volta para o início, pulnado o restante dos comandos abaixo.
                continue;
            }
        }

    ?>
</body>
</html>
