<?php

class Carro extends Veiculo
{

    public $tetoSolar = true;

    public function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;

    }

    public function abrirTetoSolar()
    {
        echo 'Abrir teto';
    }
    public function alterarPosicaoVolante()
    {
        echo 'Alterar Posição ';
    }

}

class Moto extends Veiculo
{

    public $contraPesoGuidao = true;
    public function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;

    }

    public function empinhar()
    {
        echo 'Empinhar';
    }
    public function trocarMarcha(){
        echo 'Desengatar embreagem com a Mão e engatar marcha com o Pé';
    }
}

class Veiculo
{
    public $placa = null;
    public $cor = null;
    public function acelerar()
    {
        echo 'Acelerar';
    }
    public function frear()
    {
        echo 'Frear';
    }
    function trocarMarcha(){
        echo 'Desengatar embreagem com o Pé e engatar marcha com a Mão';
    }

}

$carro = new Carro('ABCD1234', 'BRANCA');

$moto = new Moto('XED', '4564');

echo '<pre>';
print_r($carro);
echo '</pre>';

echo $carro->trocarMarcha();
echo '<hr>';

echo '<pre>';
print_r($moto);
echo '</pre>';
echo $moto->trocarMarcha();
