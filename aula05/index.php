<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 05</title>
</head>
<body>
  <pre>
    <?php
      require_once "ContaBanco.php";
      $p1 = new ContaBanco();
      $p2 = new ContaBanco();

      $p1->abrirConta("CC");
      $p1->setDono("José");
      $p1->setnumConta(1010);

      $p2->abrirConta("CP");
      $p2->setDono("Maria");
      $p2->setnumConta(2020);

      $p1->depositar(300);
      $p2->depositar(500);

      print_r($p1);
      print_r($p2);
    ?>
  </pre>
</body>
</html>