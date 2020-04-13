<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

require "ContaCorrente.php";

$contaJao = new ContaCorrente("João", "1212", "12345-6", 3200.00);

$contaMaria = new ContaCorrente("Maria", "1313", "23456-7", 2000.00);

/*$contaJao->sacar(200.00)->depositar(800.00); //encadeamento de operações
 *
 * $contaMaria->depositar(1000.00);
 *
 * echo "<pre>";
 * var_dump($contaJao);
 * echo "</pre>";
 *
 * echo "<pre>";
 * var_dump($contaMaria);
 * echo "</pre>";
*/
$contaJao->transferir(200.00, $contaMaria);

echo "Tranferência realizada com sucesso!";

echo "<pre>";
var_dump($contaJao);
echo "</pre>";

echo "<pre>";
var_dump($contaMaria);
echo "</pre>";

/* echo $contaJao->getSaldo();
 * echo "<pre>";
 * var_dump($contaJao);
 * echo "</pre>";
 */