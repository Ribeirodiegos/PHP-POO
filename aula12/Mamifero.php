<?php
  require_once 'Animal.php';
  class Mamifero extends Animal {
    // ATRIBUTOS
    private $corPelo;

    // METODOS
    public function locomover()
    {
      echo "<p>Correndo</p>";
    }

    public function alimentar()
    {
      echo "<p>Mamando</p>";
    }

    public function emitirSom()
    {
      echo "<p>Som de mamifero.</p>";
    }

    // METODOS AUXILIARES
    public function setCorPelo($corPelo)
    {
      $this->corPelo = $corPelo;
    }

    public function getCorPelo()
    {
      return $this->corPelo;
    }
  }
?>