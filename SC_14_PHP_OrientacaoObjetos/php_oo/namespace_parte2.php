<?php
    // a importação de namespaces é válida apenas para classes e interfaces e do que estiver dentro disso.
    // não é válido para funções e constantes;
    require "bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    // Indicar o que dentro da biblioteca que pretendo utilizar
    
    use \A\Cliente;
    $c = new Cliente();

    print_r($c);
    echo $c->__get('nome');

    // Para não dar conflito por duplicar a classe cliente precisa de Alias
    // use B\Cliente;

    // INCLUINDO UM ALIAS PARA RETIRAR O CONFLITO
    use B\cliente as C1;
    $c = new C1();

    print_r($c);
    echo $c->__get('nome');

?>  
