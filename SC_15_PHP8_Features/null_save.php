<?php
    $objeto = null;


    // Para corrigir o erro de chamar algo null
    if (isset($objeto) && $objeto !=null){
        $objeto->total();
    }
    
    // Pode utilizar o operador Null Save ? antes da chamada, onde a chamada fica ignorada

    $objeto?->total();

    class Funcionario{
        public function __construct(
            private string $nome = "",
            private float $salario = 0
        )
        {}
        public function info(){
            return "Nome: $this->nome - Salário: $this->salario";
        }
    }

    class FolhaPagamento{
        private $funcionarios = null;
        public function __construct(){
            $this->funcionarios = [
                new Funcionario('Maria',1200),
                new Funcionario('Pedro', 2200),
                new Funcionario('Fernanda', 3200),
                new Funcionario('Lorenzo', 4200),
            ];
        }

        public function getTotalFuncionarios(){
            return 25;
        }

        public function getFuncionario(){
            return $this->funcionarios[1];
        }
    }

    $folhaPagamento = new FolhaPagamento();
    // $folhaPagamento = null;

    echo $folhaPagamento?->getTotalFuncionarios();
    echo '<hr>';
    print_r($folhaPagamento?->getFuncionario()->info());

?>
