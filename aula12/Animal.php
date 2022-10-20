<?php
  abstract class Animal { 
    // METODOS ABSTRATOS SÓ PODEM SER CRIADOS EM CLASSES ABSTRATAS, POR ISSO O "abstract class animal" acima.
    protected $peso;
    protected $idade;
    protected $membros;

    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();

    public function setPeso($peso)
    {
      $this->peso = $peso;
    }

    public function getPeso()
    {
      return $this->peso;
    }

    public function setIdade($idade)
    {
      $this->idade = $idade;
    }

    public function getIdade()
    {
      return $this->idade;
    }

    public function setMembros($membros)
    {
      $this->membros = $membros;
    }

    public function getMembros()
    {
      return $this->membros;
    }
    
  }
?>