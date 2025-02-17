<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        
        $valor = 5000;

        function calcularImposto($salario){
            if ($salario > 4664.68){
                return '27.50%';
            } else if($salario >=3751.06 && $salario <4664.68) {
                return '22.50%';
            } else if($salario >=2826.66 && $salario <=3751.05){
                return '15.00%';
            } else if($salario >=1903.99 && $salario <=2826.65){
                return '7.50%';
            } else {
                return 'Isento';
            }
        }
        echo calcularImposto($valor);

    ?>
</body>
</html>
