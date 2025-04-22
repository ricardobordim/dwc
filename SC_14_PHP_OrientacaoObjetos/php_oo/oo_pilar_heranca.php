<?php

    class Carro extends Veiculo{


        public $tetoSolar = true;

        public function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;

        }

        function abrirTetoSolar(){
            echo 'Abrir teto';
        }
        function alterarPosicaoVolante()
        {
            echo 'Alterar Posição ';
        }

    }

    class Moto extends Veiculo{

        public $contraPesoGuidao = true;
        public function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;

        }

        function empinhar(){
            echo 'Empinhar';
        }
    }

    class Veiculo{
        public $placa = null;
        public $cor = null;
        function acelerar()
        {
            echo 'Acelerar';
        }
        function frear()
        {
            echo 'Frear';
        }


    }

    $carro = new Carro('ABCD1234','BRANCA');

    $moto = new Moto('XED','4564');
    
    echo '<pre>';
    print_r($carro);
    echo '</pre>';

    echo $carro->acelerar();
    echo '<hr>';

    echo '<pre>';
    print_r($moto);
    echo '</pre>';
    echo $moto->frear();





?>
