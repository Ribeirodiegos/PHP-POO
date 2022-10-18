<?php
  require_once 'Pessoa.php';

  class Funcionario extends Pessoa {
    // ATRIBUTOS
    private $setor;
    private $trabalhando;

    // METODOS
    public function mudarTrabalho()
    {
      $this->trabalhando = ! $this->trabalhando;
    }

    // METODOS AUXILIARES
    function __construct()
    {
      # code...
    }

    public function setSetor($setor)
    {
      $this->setor = $setor;
    }

    public function getSetor()
    {
      return $this->setor;
    }

    public function setTrabalhando($trabalhando)
    {
      $this->trabalhando = $trabalhando;
    }

    public function getTrabalhando()
    {
        return $this->trabalhando;
    }
  }
?>