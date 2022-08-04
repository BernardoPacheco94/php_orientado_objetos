<?php

class Programador extends Pessoa {
    public $linguagem;

    public function __construct($tmpNome, $tmpLinguagem)
    {
        $this-> nome = $tmpNome;// a variável nome está recebendo o this, mas não está nessa classe, mas consegue definir o nome atraves do extends
        $this-> linguagem = $tmpLinguagem;
    }

}