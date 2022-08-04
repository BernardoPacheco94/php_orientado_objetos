<?php

require "Pessoa.php";
require "Programador.php";

$programador = new Programador("Bernardo", "Python");

echo $programador::ESPECIE;