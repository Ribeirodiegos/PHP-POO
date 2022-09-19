<?php
  class Caneta {
    public $modelo;
    private $ponta;
    private $cor;
    private $tampada;
    
    public function __construct($m, $c, $p) //funções contrutoras, como o nome diz, servem para construir um objeto, pois determina os atributos no momento em que o objeto é criado. Outra forma de criar um metodo construtor, é dando a função o mesmo nome da classe, nesse caso seria : public function Caneta()
    {
      $this->modelo = $m;
      $this->cor = $c;
      $this->ponta =$p;
      $this->tampar();
    }

    public function tampar()
    {
      $this->tampada = true;
    }
    
    public function getModelo() //funções "getters" só retornam resultados, não alteram valores.
    {
      return $this->modelo;
    }

    public function setModelo($m) // funções "setters" nao retornam nada, mas alteram o valor de uma variavel dentro do seu escopo.
    {
      $this->modelo = $m;
    }

    public function getPonta()
    {
      return $this->ponta;
    }
    
    public function setPonta($p)
    {
      $this->ponta = $p;
    }
  }
?>