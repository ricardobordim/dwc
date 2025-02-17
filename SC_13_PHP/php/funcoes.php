<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <?php

        function exibirMensagem(){
            echo 'Bom dia <br>';
        }
        exibirMensagem();

        function calcularTerreno($largura, $comprimento){
            return ($largura * $comprimento);
        }

        echo calcularTerreno(10,5);

    ?>

</body>
</html>
