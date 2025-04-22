<?php

    interface EquipamentoEletronico{
        public function ligar();
        public function desligar();
    }
    class Geladeira implements EquipamentoEletronico{

        public function ligar(){
            echo 'Ligar';
        }
        public function desligar(){
            echo 'Desligar';
        }
        public function abrirPorta(){
            echo 'Abrir a Porta';
        }
    }

    class Tv{
        public function trocarCanal(){
            echo 'Trocar Canal';
        }
    }

    $geladeira = new Geladeira();
    $geladeira->abrirPorta();


    interface MamiferoInterface{
        public function respirar();
    }

    interface TerrestreInterface
    {
        public function andar();
    }

    interface AquaticoInterface
    {
        public function nadar();
    }


    class Humano implements MamiferoInterface, TerrestreInterface, AquaticoInterface {
        public function respirar(){
            echo 'Respirar';
        }
        public function andar(){
            echo 'Andar';
        }
        public function nadar(){
            echo 'Nadar';
        }
        public function trabalhar(){
            echo 'Trabalhar';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface{
        public function respirar(){
            echo 'Respirar';
        }
        public function nadar(){
            echo 'Nadar';
        }
    }

    $baleia = new Baleia();
    echo '<br>';
    $baleia->nadar();


    interface AnimalInterface{
        public function comer();
    }
    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    class Papagaio implements AveInterface{
        public function comer(){
            echo 'Comer';
        }
        public function voar(){
            echo 'Voar';
        }
    }

    $papagaio = new Papagaio();
    echo '<br>';
    $papagaio->voar();

?>
