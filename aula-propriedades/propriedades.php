<?php
require "Pessoa_Propriedades.php";

$pessoa = new Pessoa_Propriedades('Bernardo');

echo $pessoa->getNome();

echo "<br>";

$pessoa->setNome('Joao');
