<?php
class Pessoa {
    protected $nome;

    public function setNome($novoNome)
    {
        $this->nome = $novoNome;
        echo $novoNome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}