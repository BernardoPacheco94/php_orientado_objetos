<?php

class Pessoa {
    public $nome;
    const ESPECIE = "Humano";//essa é a herança

    public function setNome($novoNome)
    {
        $this->nome = $novoNome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}