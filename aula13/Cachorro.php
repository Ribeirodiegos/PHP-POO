<?php
  require_once 'Lobo.php';
  class Cachorro extends Lobo {
    public function emitirsom()
    {
      echo "<p>Au au au!</p>";
    }

    public function reagirFrase($frase)
    {
      if ($frase == "Toma comida" || "Ola"){
        echo "Abanar o rabo.<br>";
      } else {
        echo "chorar<br>";
      }
    }

    public function reagirHora($hora, $min)
    {
      if ($hora <12) {
        echo "Abanar o rabo.<br>";
      } elseif ($hora>=18) {
        echo "Ignorar.<br>";
      } else {
        echo "Abanar e latir.<br>";
      }
    }

    public function reagirDono($dono)
    {
      if($dono){
        echo "Abanar o rabo.<br>";
      } else {
        echo "Rosnar e latir.<br>";
      }
    }

    public function reagirIdadePeso($idade, $peso)
    {
      if($idade<5) {
        if($peso<10) {
        echo "Abanar o rabo.<br>";
        } else {
        echo "Latir.<br>";
        }
      } else {
        if($peso<10) {
          echo "Rosnar.<br>";
          } else {
          echo "Ignorar.<br>";
          }
      }
    }
  }
?>