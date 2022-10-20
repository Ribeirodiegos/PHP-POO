<?php
  require_once 'Animal.php';
  class Peixe extends Animal {
    // ATRIBUTOS
    private $corEscama;

    // METODOS
    public function locomover()
    {
      echo "<p>Nadando</p>";
    }

    public function alimentar()
    {
      echo "<p>Comendo nutrientes</p>";
    }

    public function emitirSom()
    {
      echo "<p>Peixe nao faz som.</p>";
    }

    public function soltarBolhas()
    {
      echo "Soltou uma bolha";
    }

    // METODOS AUXILIARES

    public function setCorEscama($corEscama)
    {
      $this->corEscama = $corEscama;
    }

    public function getCorEscama()
    {
      return $this->corEscama;
    }

  }
?>