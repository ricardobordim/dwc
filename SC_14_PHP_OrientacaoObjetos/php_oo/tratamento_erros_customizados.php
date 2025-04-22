<?php

    class MinhaException extends Exception{
        private $erro ='';

        public function __construct($erro){
            $this->erro=$erro;
        }
        public function exibirMensagemErro(){
            return $this->erro;
        }
    }
    try {
        throw new MinhaException('Esse é um erro de teste');
    } catch (MinhaException $e) {
        echo $e->exibirMensagemErro();
    }


?>
