<?php

// class Produto{
//     public string $nome ="";
//     public float $valor = 0;

//     public function __construct($nome, $valor){
//         $this->nome = $nome;
//         $this->valor = $valor;
//     }
// }


// Argumentos no construtor e não na Classe
    
class Produto{
    public function __construct(    
        public string $nome ="",
        public float $valor = 0)
    { }
}
    $produto= new Produto(nome:'Smartphone', valor:1500);
    echo "Produto= ". $produto->nome;
    echo "<br>";
    echo "Valor= " . $produto->valor;


    $produto2 = new Produto(valor: 2500, nome:'Geladeira');
    echo '<hr>';
    echo "Produto= " . $produto2->nome;
    echo "<br>";
    echo "Valor= " . $produto2->valor;


?>
