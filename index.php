<?php

require 'classes/produto.php';
require 'models/produto.php';

//coloca um apelido na Classe pra nao precisar identifiar a pasta no objeto $produto = new \models\Produto();
use models\Produto as productModel; 
use classes\Produto as productClass;

$produto2 = new productModel();
$produto2->mostrarDetalhes();

echo "<hr>";

$produto = new productCLass();
$produto->mostrarDetalhes();