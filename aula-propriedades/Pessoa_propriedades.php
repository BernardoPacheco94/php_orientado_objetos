<!-- Há 3 tipos de propriedades: public, private, protected -->
<?php



class Pessoa_Propriedades{
    private $nome;

    public function __construct($tmpNome) //o construct permite instanciar um objeto sem precisar declarar na hora de usar
    {
        $this->nome = $tmpNome;
    }

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

