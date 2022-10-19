<?php
  require_once 'Aluno.php';
  class Bolsista extends Aluno {
    private $bolsa;
    
    public function renovarBolsa()
    {
      # code...
    }

    public function pagarMensalidade()
    {
      echo "<p>Pagando mensalidade do aluno ". $this->getNome() . " (Bolsista - desconto de 10%) </p>";
    }

    public function setBolsa($bolsa)
    {
      $this->bolsa = $bolsa;
    }

    public function getBolsa()
    {
      return $this->bolsa;
    }
  }
?>