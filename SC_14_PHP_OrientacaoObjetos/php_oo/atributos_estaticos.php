<?php

    class Exemplo{
        public static $atributo1 = 'Sou Estático';
        public $atributo2 = "Sou Normal";

        public static function metodo1(){
            echo 'Eu Sou um método Estático';

        }

        public function metodo2(){
            echo 'Eu Sou um método Normal';
        }
    }
    echo Exemplo::$atributo1;
    echo '<br>';
    Exemplo::metodo1();
    echo '<br>';
    // Funciona, mas não irá funcionar para sempre..
    Exemplo::metodo2();

    // Em atributos estáticos não funciona o operador: ->

    // Em métodos não estáticos não funciona @this, pois não é criado o objeto.



?>
