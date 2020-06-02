<?php
require 'classes/produto.php';
require 'models/produto.php';

use models\Produto;// as productModels;
//$produto = new \classes\Produto();
use classes\Produto as productClass;
$produto = new Produto();// productModels como apelido.
$produto->mostrarDetalhes();

echo "<br>";

$produto2 = new productClass();
$produto2->mostrarDetalhes();