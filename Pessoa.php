<?php
require_once 'Roupas.php';
require_once 'pessoaInterface.php';

class Pessoa extends Roupas implements pessoaInterface
{
public $nome;
public $idade;

public function maior_idade()
{
  if($this->idade >= 18)
  {
    return $this->nome." e maior de idade!";
  }
  else
  {
    return $this->nome." e menor de idade!";
  }
}
public function __construct($nome , $idade )
{
  $this->nome = $nome;
  $this->idade = $idade;
}
public function getCorOlhos()
{

}
public function getNacionalidade()
{

}
}
