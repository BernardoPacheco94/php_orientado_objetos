<?php

require "Pessoa.php"; // requisita o pessoa.php, apresentando um erro fatal caso não encontre (trava a aplicação)
//require_once -> só permite uma requisição do arquivo
// include -> não apresenta um erro fatal ao tentar abrir o arquivo, considerando apenas este arquivo

$uma_pessoa = new Pessoa;

$uma_pessoa->nome = "Gabriel";
$uma_pessoa->site = "www.meusite.com";

$uma_pessoa->falarNome();
echo "<br>";
$uma_pessoa->falarSite();

// var_dump($uma_pessoa); #vardump mostra algumas informações sobre a variavel