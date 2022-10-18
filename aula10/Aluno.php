<?php
require_once 'Pessoa.php';
  class Aluno extends Pessoa {
    // ATRIBUTOS
    private $matr;
    private $curso;

    // METODOS
    public function cancelarMatr(){
      echo "Matricula esta sendo cancelada.";
    }

    // METODOS AUXILIARES
    function __construct(){
      
    }

    public function setMatr($matr){
      $this->matr = $matr;
    }

    public function getMatr(){
      return $this->matr;
    }

    public function setCurso($curso){
      $this->curso = $curso;
    }

    public function getCurso(){
      return $this->curso;
    }
    

  }
?>