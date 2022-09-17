<?php
  class Caneta {
    // *** definindo todos os atributos da classe  ****
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    // *** definindo as funções da classe ***
    function rabiscar() {
      if ($this->tampada==true) {
        echo "A caneta está tampada, nao posso rabiscar.";
      } else {
        echo "Estou rabiscando....";
      }
      
    }
    function tampar () {
      $this->tampada = true;
    }
    function destampar() {
      $this->tampada = false;

    }
  }
?>