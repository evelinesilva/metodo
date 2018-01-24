<<?php

 class Conta{
public $numero;
public $saldo;
public $limite=100;
public $agencia = 'Agencia';

public function deposita($valor){
  $this->saldo += $valor;
}

public function saca($valor){
  $this->saldo -= $valor;
}

public function imprimeExtrato(){
  $total = $this->saldo + $this->limite;
  echo "Seu extrato:". PHP.EOL ;
  echo " Saldo: $Conta->saldo".  PHP.EOL;
   echo "limite: $Conta->limite" . PHP.EOL;
   echo "Total: $total " . PHP.EOL;
}

public function consultaSaldo(){
  echo "Seu saldo é de $Conta->saldo" . PHP.EOL;
}

 }

 ?>
