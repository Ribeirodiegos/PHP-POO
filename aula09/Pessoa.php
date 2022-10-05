<?php
  class Pessoa {
    // ATRIBUTOS

    private $nome;
    private $idade;
    private $sexo;

    // METODOS

    public function fazerAniver()
    {
      $this->setIdade($this->getIdade() +1);
    }

    // METODOS AUXILIARES

    function __construct($nome, $idade, $sexo)
    {
      $this->nome = $nome;
      $this->idade = $idade;
      $this->sexo = $sexo;
    }

    public function setNome($nome)
    {
      $this->nome = $nome;
    }

    public function getNome()
    {
      return $this->nome;
    }

    public function setIdade($idade)
    {
      $this->idade = $idade;
    }

    public function getIdade()
    {
      return $this->idade;
    }

    public function setSexo($sexo)
    {
      $this->sexo = $sexo;
    }

    public function getSexo()
    {
      return $this->sexo;
    }
  }
?>