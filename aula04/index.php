<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 04</title>
</head>
<body>
  <pre>
    <?php
      require_once 'Caneta.php';

      $c1 = new Caneta("BIC", "Azul", 0.5);
      // $c1->setModelo("BIC");
      // $c1->setPonta(0.5);
      // print_r($c1)


      // podemos usar as funções getters e setters dessa forma, para ser mais direto. Usa-se {} neste caso para nao ter conflito no PHP
      // echo "Eu tenho uma caneta da marca {$c1->getModelo()} com a ponta {$c1->getPonta()}.";

      print_r($c1);

    ?>
  </pre>
</body>
</html>