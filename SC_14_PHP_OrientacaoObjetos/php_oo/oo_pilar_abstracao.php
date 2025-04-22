<?php


class Funcionario{
    
    // atributos
    public $nome = 'José';
    public $telefone = '11 99999-9999';
    public $numFilhos = 2;
    
    public function mostrarNome($nome){
        echo "Ola $nome <br>";
        
    }
    public function resumirCardFunc(){
        return ("$this->nome  possui $this->numFilhos filhos <br>");

    }
    public function modificarNumFilhos($numfilhos){
            $this->numFilhos = $numfilhos;

    }
}

$funcionario  = new Funcionario();

$funcionario->mostrarNome('Ricardo');

echo $funcionario->resumirCardFunc();
$funcionario->modificarNumFilhos(1);
echo $funcionario->resumirCardFunc();





class Func
{

    // atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getters setters (overloading / sobrecarga)

    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    function __get($atributo)
    {
        return $this->$atributo;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }
    public function getNome(){
        return($this->nome);
    }
    public function getNumFilhos(){
        return($this->numFilhos);
    }


    public function mostrarNome($nome)
    {
        echo "Ola $nome <br>";

    }
    public function resumirCardFunc()
    {
        return ($this->__get('nome') .' possui ' . $this->__get('numFilhos') . ' filhos ' . '<br>');

    }
    public function modificarNumFilhos($numfilhos)
    {
        $this->numFilhos = $numfilhos;

    }
}

$func = new Func();
$func->setNome('Diogo');
$func->setNumFilhos(0);
echo $func->resumirCardFunc();

$x = new Func();
$x->__set('nome','Pedro');
$x->__set('cargo', 'Coordenador');
$x->__set('salario', 4000);
echo $x->resumirCardFunc();
echo $x->__get('nome') . ' por overload ' . '<br>';




?>
