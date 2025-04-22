<?php

    class Pai{
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getSobrenome(){
            return $this->sobrenome;
        }
        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }

        public function __get($variavel){
            return $this->$variavel;
        }

        public function __set($variavel, $valor){
            $this->$variavel = $valor;
        }
        private function executarMania(){
            echo 'Assobiar';
        }
        protected function responder(){
            echo 'Oi';
        }
        public function executarAcao(){
            $x = rand(1,10);

            if ($x>=1 && $x <=5){
                $this->responder();
            } else {
                $this->executarMania();
            }
            echo '<br>';

        }

    }

    $pai = new Pai();
    // echo $pai->humor;
    $pai->humor = 'Muito Contente';
    echo '<br>';
    echo $pai->humor;
    echo '<br>';
    echo $pai->getNome();
    
    echo '<br>';
    $pai->setNome('Sady');

    echo '<br>';
    echo $pai->getNome();

    echo '<br>';
    $pai->setSobrenome('Silveira');
    echo $pai->getSobrenome();
    /*
    Utilizando os métodos mágicos, acesso automaticamente as variaveis.

    */

    // $pai->nome = 'Ricardo';
    // $pai->sobrenome = 'Bordim';

    // echo '<br>';

    // echo $pai->nome . ' ' .  $pai->sobrenome;

    // Daria Erro por ser privado ou protegido
    // echo $pai->executarMania();


    echo '<br>';
    echo $pai->executarAcao();


    class Filho extends Pai{
        public function getAtributo($attr){
            return $this->$attr;
        }
        public function setAtributo($variavel, $valor){
            $this->$variavel = $valor;
        }
        // Dica útil para debug de métodos
        public function __construct(){
            // exibe os métodos do objeto
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }
        private function executarMania(){
            echo 'Cantar';
        }
        public function x(){
            $this->executarMania();

        }
        protected function responder(){
            echo 'Bom dia';
        }


    }

    $filho = new Filho();
    echo '<pre>';
        print_r($filho);
    echo '</pre>';
    echo '<hr>';
    echo $filho->getAtributo('humor');
    // Lembrando que o atributo abaixo é privado.
    // echo $filho->getAtributo('nome');
    $filho->setAtributo('humor', 'de boas');
    echo '<br>';
    echo $filho->getAtributo('humor');
    echo '<hr>';
    
    echo $filho->getAtributo('sobrenome');
    $filho->setAtributo('sobrenome', 'Silveira');
    echo '<br>';
    echo $filho->getAtributo('sobrenome');


    // Cuidado com  contexto, o nome criado abaixo é do filho, sem herança, desde que
    // os métodos mágicos __set e __get não estejam habilitados;

    $filho->setAtributo('nome', 'Jandir');
    echo '<br>';
    echo $filho->getAtributo('nome');
    
    echo '<pre>';
        print_r($filho);
    echo '</pre>';

    // Não lista métodos protegidos e privados, apesar de protegidos serem herdados;
    // Para ver os métodos protegidos, precisa ser na criação do objeto (__construct), não na aplicação
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';

    // Lembrando que o atributo abaixo é privado, mas é acessível com os métodos mágicos
    echo $filho->getAtributo('nome');

    echo '<br>';

    // repare na possibilidade de executar internamente os métodos privados e protegidos do PAI
    // sendo que está executando o privado do Pai e o sobreposto do filho (responder).
    $filho->executarAcao();

    echo '<br>';
    $filho->x();
    echo '<hr>';
    
    $filho->sobrenome = 'Bordim';
    echo $pai->sobrenome;
    echo '<br>';
    echo $filho->sobrenome;








?>
