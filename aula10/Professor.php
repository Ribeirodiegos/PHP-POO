<?php
  require_once 'Pessoa.php';
  class Professor extends Pessoa {
    // ATRIBUTOS
    private $especialidade;
    private $salario;

    // METODOS
    public function receberAum($aum)
    {
      $this->salario += $aum;
    }

    // METODOS AUXILIARES
    function __construct()
    {
      # code...
    }

    public function setEspecialidade($especialidade)
    {
      $this->especialidade = $especialidade;
    }
    
    public function getEspecialidade()
    {
      return $this->especialidade;
    }

    public function setSalario($salario)
    {
      $this->salario = $salario;
    }

    public function getSalario()
    {
      return $this->salario;
    }
  }
?>