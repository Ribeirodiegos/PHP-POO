<?php
  require_once 'Animais.php';
  class Mamifero extends Animais {
    protected $corPelo;

    public function emitirsom()
    {
      echo "<p>Som de mamifero</p>";
    }
  }
?>