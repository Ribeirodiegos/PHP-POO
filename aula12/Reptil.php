<?php
  require_once 'Animal.php';
  class Reptil extends Animal {
    // ATRIBUTOS
    private $corEscama;

    // METODOS
    public function locomover()
    {
      echo "<p>Rastejando</p>";
    }

    public function alimentar()
    {
      echo "<p>Comendo vegetais</p>";
    }

    public function emitirSom()
    {
      echo "<p>Som de reptil.</p>";
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