<?php
class Lutador {
  // ATRIBUTOS
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;

  // METODOS
  public function apresentar()
  {
    echo "<p>-------------------------------</p><br>";
    echo "Lutador: " . $this->getNome();
    echo "<br>Origem: " . $this->getNacionalidade();
    echo "<br>Idade: " . $this->getIdade . " anos";
    echo "<br>Altura: " . $this->getAltura();
    echo "<br>Peso: " . $this->getPeso();
    echo "<br>Vitorias: " . $this->getVitorias();
    echo "<br>Derrotas: " . $this->getDerrotas();
    echo "<br>Empates: " . $this->getEmpates();


  }

  public function status()
  {
    echo "<p>". $this->getNome() . " é peso " . $this->getCategoria() . " e tem " . $this->getVitorias() . " vitorias, " . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.";
  }

  public function ganharLuta()
  {
    $this->setVitorias($this->getVitorias() + 1);
  }

  public function perderLuta()
  {
    $this->setDerrotas($this->getDerrotas() + 1);
  }

  public function empatarLuta()
  {
    $this->setEmpates($this->getEmpates() + 1);
  }

  // GETTERS, SETTERS e CONSTRUTOR

  function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
    $this->nome = $no;
    $this->nacionalidade = $na;
    $this->idade = $id;
    $this->altura = $al;
    $this->setPeso($pe);
    $this->vitorias = $vi;
    $this->derrotas = $de;
    $this->empates = $em;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function getNome(){
    return $this->nome;
  }

  public function setNacionalidade($nacionalidade){
    $this->nacionalidade = $nacionalidade;
  }

  public function getNacionalidade(){
    return $this->nacionalidade;
  }

  public function setIdade($idade){
    $this->idade = $idade;
  }

  public function getIdade(){
    return $this->idade;
  }

  public function setAltura($altura){
    $this->altura = $altura;
  }

  public function getAltura(){
    return $this->altura;
  }

  public function setPeso($peso){
    $this->peso = $peso;
    $this->setCategoria($peso);
  }

  public function setCategoria($peso){
    if ($peso<52.2) {
      $this->categoria = "Invalido";
    } elseif ($peso<=70.3) {
      $this->categoria = "Leve";
    } elseif ($peso<=83.9) {
      $this->categoria = "Medio";
    } elseif ($peso<=120.2) {
      $this->categoria = "Pesado";
    } else {
      $this->categoria = "Invalido";
    }
  }

  public function getCategoria()
  {
    return $this->categoria;
  }

  public function getPeso(){
    return $this->peso;
  }

  public function setVitorias($vitorias){
    $this->vitorias = $vitorias;
  }

  public function getVitorias(){
    return $this->vitorias;
  }

  public function setDerrotas($derrotas){
    $this->derrotas = $derrotas;
  }

  public function getDerrotas(){
    return $this->derrotas;
  }

  public function setEmpates($empates){
    $this->empates = $empates;
  }

  public function getEmpates(){
    return $this->empates;
  }
}
  
?>