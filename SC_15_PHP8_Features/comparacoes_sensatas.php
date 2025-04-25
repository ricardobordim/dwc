<?php

// No php7 tudo seria true, mas no php8, somente alguns são true, desconsiderando os texto
    echo '0 =="0" =  ' . (0=="0");
    echo '<br>';
    echo '0 =="0.0" =  ' . (0 == "0.0");
    echo '<br>';
    echo '0 =="teste" =  ' . (0 == "teste");
    echo '<br>';
    echo '0 =="" =  ' . (0 == "");
    echo '<br>';
    echo '50 =="   50.0" =  ' . (50 == "   50.0");
    echo '<br>';
    echo '50 ==" 50teste" =  ' . (50 == "50teste");
    echo '<br>';
    echo '0 =="0.0" =  ' . (0 == "0.0");


?>

