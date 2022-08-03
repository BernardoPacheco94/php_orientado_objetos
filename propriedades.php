<?php
include "Pessoa_Propriedades.php";

$uma_pessoa = new Pessoa_Propriedades;

$uma_pessoa->setNome('Gabriel');
echo "<br>";
echo $uma_pessoa->getNome();
