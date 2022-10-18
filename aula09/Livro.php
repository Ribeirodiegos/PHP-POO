<?php
  require_once 'Pessoa.php';
  require_once 'Publicacao.php';
  class Livro implements Publicacao {
    // ATRIBUTOS

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;


    // METODOS

    public function detalhes()
    {
      echo "Livro " . $this->titulo . " escrito por " . $this->autor;
      echo "<br>Paginas " . $this->totPaginas . ", atual: ". $this->pagAtual;
      echo "<br>Sendo lido por " . $this->leitor->getNome();
    }


    // METODOS AUXILIARES

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
      $this->titulo = $titulo;
      $this->autor = $autor;
      $this->aberto = false;
      $this->totPaginas = $totPaginas;
      $this->leitor = $leitor;
      $this->pagAtual = 0;
    }

    public function setTitulo($titulo)
    {
      $this->titulo = $titulo;
    }

    public function getTitulo()
    {
      return $this->titulo;
    }

    public function setAutor($autor)
    {
      $this->autor = $autor;
    }

    public function getAutor()
    {
      return $this->autor;
    }

    public function setTotpaginas($totPaginas)
    {
      $this->totPaginas = $totPaginas;
    }

    public function getTotpaginas()
    {
      return $this->totPaginas;
    }

    public function setPagatual($pagAtual)
    {
      $this->pagAtual = $pagAtual;
    }

    public function getPagatual()
    {
      return $this->pagAtual;
    }

    public function setAberto($aberto)
    {
      $this->aberto  = $aberto;
    }

    public function getAberto()
    {
      return $this->aberto;
    }

    public function setLeitor($leitor)
    {
      $this->leitor = $leitor;
    }

    public function getLeitor()
    {
      return $this->leitor;
    }

    public function abrir()
    {
      $this->aberto = true;
    }

    public function avancarPag()
    {
      $this->pagAtual ++;
    }

    public function fechar()
    {
      $this->aberto = false;
    }

    public function folhear($p)
    {
      if ($p>$this->totPaginas){
        $this->pagAtual = 0;
      } else {
        $this->pagAtual = $p;
      }
    }

    public function voltarPag()
    {
      $this->pagAtual --;
    }
  }

?>