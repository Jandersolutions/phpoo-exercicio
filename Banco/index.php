<?php

include 'header.php';
require_once 'functions.php';
require_once 'Conta.php';
require_once 'ContaPremium.php';

$conta = new ContaPremium();
$conta->depositar(100);
$conta->sacar(50);

echo "<h1>"."Seu saldo e: ".$conta->getSaldo()." R$"."</h1>";

include 'footer.php';
