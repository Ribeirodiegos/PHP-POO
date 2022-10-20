<?php
  require_once 'Animal.php';
  class Ave extends Animal {
    // ATRIBUTOS
    private $corPena;

    // METODOS
    public function locomover()
    {
      echo "<p>Voando</p>";
    }

    public function alimentar()
    {
      echo "<p>Comendo frutas</p>";
    }

    public function emitirSom()
    {
      echo "<p>Som de ave.</p>";
    }

    public function fazerNinho()
    {
      echo "Construiu um ninho";
    }

    // METODOS AUXILIARES

    public function setCorPena($corPena)
    {
      $this->corPena = $corPena;
    }

    public function getCorPena()
    {
      return $this->corPena;
    }

  }
?>