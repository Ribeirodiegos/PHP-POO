<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 09</title>
</head>
<body>
  <pre>
    <?php
      require_once 'Pessoa.php';

      $p[0] = new Pessoa("Diego", 30, "Masculino");

      $p[0]->fazerAniver();

      print_r($p[0]);
    ?>
  </pre>
</body>
</html>