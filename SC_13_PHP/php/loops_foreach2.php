<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php

    // foreach especializado para Arrays e Objetos


        $funcionarios = array('João','Maria','José','Pedro','Madalena');
        echo '<pre>';
            print_r($funcionarios);
        echo '</pre>';

    // Não precisou criar variáveis ou controles para final de array;

    // foreach (Array as Variavel){}
     foreach ($funcionarios as $nome_funcionario) {
        echo "$nome_funcionario <br>";
     }

     echo '<hr>';
    //  Para pegar o indice precisa incluir uma outra variavel e o token =>

    // foreach (Array as indice => Valor){}
    foreach ($funcionarios as $chave => $nome_funcionario) {
        echo "ID = $chave,  Nome = $nome_funcionario <br>";
    }

    $funcionarios2 = array(array('Nome'=>'João', 'Salário'=>'3500.00', 'Data_nascimento'=>'31/01/1975'),
                           array('Nome'=>'Maria','Salário'=>'2500.00'),
                           array('Nome'=>'Pedro','Salário'=>'1500.00')
                        );

    echo '<hr>';
                     
    echo '<pre>';
        print_r($funcionarios2);
    echo '</pre>';

    echo '<hr>';

    // Por ser um array de arrays a variavel colaborador o array(nome, salario);
    foreach ($funcionarios2 as $key => $colaborador) {
        
        // usar o print_r e não o echo por ser um array
        // print_r($colaborador);
        foreach ($colaborador as $key2 => $valor) {
            echo "$key2 - $valor <br>";
        }
        echo "<hr>";
    }

   
    ?>
</body>
</html>
