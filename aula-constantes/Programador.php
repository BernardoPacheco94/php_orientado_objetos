<?php

class Programador extends Pessoa{
    public $linguagem;

    public function __construct($tempNome, $templinguagem)
    {
        $this->nome = $tempNome;
        $this->linguagem = $templinguagem;

        echo "<br>Objeto ".__CLASS__." foi instanciado.<br>";//a __CLASS__ é uma constante que retorna o nome da classe. Há mais constantes na documentação do php.
    }
}