<?php
  abstract class Pessoa
  {
    private $nome;
    private $idade;
    private $sexo;

    public final function fazerAniver()
    {
      $this->idade ++;
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