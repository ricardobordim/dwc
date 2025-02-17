<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <!-- Esse comentário é HTML e aparece no fonte do Browser -->
    <?php
        $usuario = true;
        $valorCompra = 125;
        $valorFrete = 50;
        $descontoFrete = false;
        
        if (($usuario == true) && ($valorCompra >200)){
            $valorFrete = 0;
            $descontoFrete=true;
        } else if(($usuario == true) && ($valorCompra >150)){
            $valorFrete = 10;
            $descontoFrete = true;
        }  else if(($usuario == true) && ($valorCompra >100)){
            $valorFrete = 20;
            $descontoFrete = true;
        }

    ?>
    <h1>Detalhes do Pedido</h1>
    <p>Possui Cartão da Loja:
    <?php
        if($usuario==true){
            echo 'SIM';
        }else{
            echo 'NÃO';
        }
    ?>
    </p>
    <p>Valor da compra: <?= $valorCompra ?></p>

    <p>Recebeu desconto do Frete: <?= $descontoFrete ? 'Sim' : 'Não'?> </p>

    <?php
    
    //Usando o operador ternário
    /*
        if($descontoFrete){
            echo 'SIM';
        }else{
            echo 'NÃO';
        }
    */
    ?>
    <p>Valor do frete: <?= $valorFrete ?></p>

</body>
</html>
