<?php

require "Pessoa.php";
require "Programador.php";

$programador = new Programador("Bernardo","php");

echo $programador -> getNome();//essa função está na classe pessoa e não programador, porém a classe programador tem herança de pessoa

