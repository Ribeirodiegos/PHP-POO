<?php
  require_once 'Pessoa.php';
  class Gafanhoto extends Pessoa {
    // ATRIBUTOS
    private $login;
    private $totAssistido;

    // METODOS
    public function viuMaisUm()
    {
      $this->totAssistido ++;
    }

    // METODOS AUXILIARES
    public function __construct($nome, $idade, $sexo, $login)
    {
      $this->nome =  $nome;
      $this->idade = $idade;
      $this->sexo = $sexo;
      $this->login = $login;
      $this->totAssistido = 0;
    }

    public function setLogin($login)
    {
      $this->login = $login;
    }

    public function getLogin()
    {
      return $this->login;
    }

    public function setTotAssistido($totAssistido)
    {
      $this->totAssistido = $totAssistido;
    }

    public function getTotAssistido()
    {
      return $this->totAssistido;
    }
  }
?>