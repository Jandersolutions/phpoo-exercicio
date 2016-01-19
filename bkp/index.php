<?php

include 'header.php';
require_once 'functions.php';
require_once 'Pessoa.php';

echo "<h3>".$pessoa1->nome." tem ".$pessoa1->idade." Anos!"."<br>"."Esta trajando uma camisa: ".$pessoa1->camisa."</h3>";
echo "<br>";
echo "<h3>"."Tem a cor dos olhos: ".$pessoa1->getCorOlhos."</h3>";
echo "<br>";
echo "<h3>".$pessoa1->maior_idade()."</h3>";
echo "<hr>";
echo "<h3>".$pessoa2->nome." tem ".$pessoa2->idade." Anos!"."<br>"."Esta trajando uma saia: ".$pessoa2->saia."</h3>";
echo "<br>";
echo "<h3>"."Tem a cor dos olhos: ".$pessoa2->getCorOlhos."</h3>";
echo "<br>";
echo "<h3>".$pessoa2->maior_idade()."</h3>";
echo "<hr>";
echo "<h3>".$pessoa3->nome." tem ".$pessoa3->idade." Anos!"."<br>"."Esta trajando um casaco: ".$pessoa3->casaco."</h3>";
echo "<br>";
echo "<h3>"."Tem a cor dos olhos: ".$pessoa3->getCorOlhos."</h3>";
echo "<br>";
echo "<h3>".$pessoa3->maior_idade()."</h3>";

include 'footer.php';
