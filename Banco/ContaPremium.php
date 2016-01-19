<?php

class ContaPremium extends Conta
{
  public function __construct()
  {
    $this->saldo += 10;
  }
  protected function calculoDeposito($valor)
  {
    return $valor += 20;
  }
}
