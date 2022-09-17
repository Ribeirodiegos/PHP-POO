<?php
  class Caneta {
    // *** definindo todos os atributos da classe  ****
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    // *** definindo as funções da classe ***
    public function rabiscar() {
      if ($this->tampada==true) {
        echo "A caneta está tampada, nao posso rabiscar.";
      } else {
        echo "Estou rabiscando....";
      }
      
    }
    // aqui temos duas funções publicas que podem usufruir do atributo tampada, podendo altera-lo mesmo sendo protegido.
    public function tampar () {
      $this->tampada = true;
    }
    public function destampar() {
      $this->tampada = false;

    }
  }
?>