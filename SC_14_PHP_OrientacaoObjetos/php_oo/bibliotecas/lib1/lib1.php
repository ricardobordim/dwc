<?php

// Para explicação foi criado no mesmo arquivo, mas não deve ser assim.
// A partir desse ponto começa essa divisão do código.
    namespace A;
    class Cliente implements CadastroInterface{
        public $nome = 'Jorge';

        public function __construct(){
            print_r(get_class_methods($this));
        }
        public function __get($attr){
            return $this->$attr;
        }
        public function salvar(){
            echo 'Salvar';
        }
    }
    interface CadastroInterface{
        public function salvar();
    }
