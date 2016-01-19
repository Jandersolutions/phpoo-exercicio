<?php

require_once 'Pessoa.php';


$pessoa1 = new Pessoa("Janderson" , 35);
$pessoa1->camisa = 'Azul';
$pessoa1->getCorOlhos = 'Castanhos Claros';

$pessoa2 = new Pessoa("Maristela" , 13);
$pessoa2->saia = 'Branca';
$pessoa2->getCorOlhos = 'Azuis';

$pessoa3 = new Pessoa("Jorge" , 56);
$pessoa3->casaco = 'Xadrez';
$pessoa3->getCorOlhos = 'Castanhos Escuros';

$titulo = $pessoa1->nome;
