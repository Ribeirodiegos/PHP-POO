<?php
  class ContaBanco  
  {
    private $dono;
    public $numConta;
    protected $tipo;
    private $status;
    private $saldo;

    public function __construct()
    {
      $this->setSaldo(0);
      $this->setStatus(false);
      echo "<p>Conta criada com sucesso!</p>";
    }


    public function abrirConta($t)
    {
      $this->setTipo($t);
      $this->setStatus(true);
      if($t == "CC") {
        $this->setSaldo(50);
      } elseif ($t == "CP") {
        $this->setSaldo(150);
      }
    }

    public function fecharConta()
    {
      if ($this->getSaldo() > 0) {
        echo "<p> A conta ainda tem dinheiro, não é possivel fecha-lá.</p>";
      } elseif ($this->getSaldo() < 0) {
        echo "<p> A conta ainda está em débito, não é possivel fecha-lá.</p>";
      } else {
        $this->setStatus(false);
      }
    }

    public function depositar($v)
    {
      if ($this->getStatus()) {
        $this->setSaldo($this->getSaldo() + $v);
      } else {
        echo "<p> A conta foi esta inativa, não é possivel completar o deposito.</p>";
      }
    }

    public function sacar($v)
    {
      if ($this->getStatus()) {
        if($this->getSaldo() >= $v) {
          $this->setSaldo($this->getSaldo() - $v);
        } else {
          echo "<p>Saldo insuficiente, tente outro valor.</p>";
        }
      } else {
        echo "<p> A conta foi esta inativa, não é possivel completar o deposito.</p>";

      }
    }

    public function pagarMensal()
    //  aqui checamos para ver o tipo da conta e ql valor sera cobrado
    {
      if ($this->getTipo() == "CC"){
        $v = 12;
      } elseif ($this->getTipo() == "CP") {
        $v = 20;
      }

      if($this->getStatus()){
        $this->setSaldo($this->getSaldo - $v);
      } else {
        echo "<p> A conta foi esta inativa, não é possivel completar o deposito.</p>";
        
      }
    }

    // **** SETTERS E GETTERS ****

    public function setnumConta($n)
    {
      $this->numConta = $n;
    }

    public function getnumConta()
    {
      return $this->numConta;
    }

    public function setTipo($t)
    {
      $this->tipo = $t;
    }

    public function getTipo()
    {
      return $this->tipo;
      
    }

    public function setDono($d)
    {
      $this->dono = $d;
    }

    public function getDono()
    {
      return $this->dono;
      
    }

    public function setSaldo($s)
    {
      $this->saldo = $s;
    }

    public function getSaldo()
    {
      return $this->saldo;
      
    }

    public function getStatus()
    {
      return $this->status;
      
    }

    public function setStatus($st)
    {
      $this->status = $st;
    }

  }
  
?>