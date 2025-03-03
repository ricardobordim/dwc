<?php
    session_start();
    // remover índices do array de sessão ou 
    //de qualquer array unset()

    /*
    echo ('<pre>');
        print_r($_SESSION);
    echo ('</pre>');

    $_SESSION['x'] = 'Um valor';
    $_SESSION['y'] = 'Outro valor';

    echo ('<pre>');
        print_r($_SESSION);
    echo ('</pre>');

    destroi a variável, mas não dá erro se voltar a testar
    unset($_SESSION['x']); 

    echo ('<pre>');
        print_r($_SESSION);
    echo ('</pre>');

    session_destroy();
     destroy a sessão, mas continua mostrando até que ocorra uma nova chamada da sessão.
     por isso, geralmente ocorre um direcionamento após esse comando.

    echo ('<pre>');
        print_r($_SESSION);

    echo ('</pre>');

    */
    session_destroy();
    header('Location:index.php');


?>
