<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 12</title>
</head>
<body>
  <pre>
    <?php
      require_once 'Mamifero.php';
      require_once 'Reptil.php';
      require_once 'Peixe.php';
      require_once 'Ave.php';
      require_once 'Canguru.php';
      require_once 'Cachorro.php';
      require_once 'Cobra.php';
      require_once 'Tartaruga.php';
      require_once 'GoldFish.php';
      require_once 'Arara.php';



      echo "---------- TESTE 1 ----------<br>";
      $m = new Mamifero();
      $a = new Ave();
      $r = new Reptil();
      print_r($m);
      print_r($a);
      print_r($r);

      echo "---------- TESTE 2 ----------<br>";
      $m->setPeso(10);
      $m->locomover();
      $a->locomover();
      $r->locomover();

      print_r($m);

      echo "---------- TESTE 3 ----------<br>";

      $c = new Canguru();
      $k = new Cachorro();
      $ar = new Arara();

      $c->locomover();
      $k->locomover();
      $ar->locomover();
      $k->emitirSom();

    ?>
  </pre>
</body>
</html>