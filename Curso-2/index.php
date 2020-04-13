<?php

ini_set("display_errors", 1);
require_once "autoload.php";

use classes\cargos\Diretor;
use classes\cargos\Designer;
use classes\abstratas\Funcionario;
use classes\sistemaInterno\GerenciadorBonificacao;

$diretor  = new Diretor("1234-56", 5000.00);
$diretor->senha = "123456";

var_dump($diretor->autenticar("123456"));

$designer = new Designer("1212-16", 2000.00);

$gerenciador = new GerenciadorBonificacao();

$gerenciador->AutentiqueAqui($diretor, "123456");

$gerenciador->registrar($diretor);
$gerenciador->registrar($designer);


// $gerenciador->registrar($diretor);

// var_dump($gerenciador->getTotalDeBonificacao());

//echo $diretor->getBonificacao(); echo "<br>";
//echo $designer->getBonificacao(); echo "<br>";


//$designer->modificarSalario(3500);
echo "<pre>";
var_dump($diretor);
var_dump($designer);
echo "</pre>";

$diretor->aumentarSalario();
$designer->aumentarSalario();

echo "<pre>";
var_dump($diretor);
var_dump($designer);
echo "</pre>";

?>