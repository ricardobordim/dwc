<?php

    class Pessoa{
        public $nome = null;

        function __construct($nome){
            echo 'Objeto Iniciado' . '</br>';
            $this->nome = $nome;
        }


        function __destruct(){
            echo 'Objeto Removido';
        }
        function __get($atributo){
            return $this->$atributo;
        }
        public function correr(){
            return $this->__get('nome') . ' está correndo';
        }
    }

    $pessoa =  new Pessoa('Jorge');
    echo 'Nome: ' .  $pessoa->__get('nome') . '<br>';
    echo $pessoa->correr() . '<br>';

    // Destruindo o objeto de forma proposital
    // unset($pessoa);

    //O Objeto será destruído após terminar o script





?>
