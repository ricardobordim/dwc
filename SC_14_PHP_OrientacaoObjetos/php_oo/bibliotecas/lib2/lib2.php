<?php
namespace B;

// Implementando com a interface declarada no namespace A
class Cliente implements CadastroInterface
{
    public $nome = 'Pedro';
    public function __get($attr)
    {
        return $this->$attr;
    }
    public function salvar()
    {
        echo 'Salvar';
    }
}
interface CadastroInterface
{
    public function salvar();
}

