<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 07</title>
</head>
<body>
  <pre>
    <?php
      require_once 'Lutador.php';
      // *** DEFININDO OS DADOS DOS LUTADORES ***
      $l[0] = new Lutador("Diego", "brasileiro", 30, 1.78, 94, 10, 1, 3);

      $l[1] = new Lutador("Carolina", "brasileira", 32, 1.74, 56, 0, 20, 1);

      $l[2] = new Lutador("Isis", "brasileira", 4, 1.05, 78, 10, 5, 2);

      $l[3] = new Lutador("Olivia", "boliviana", 1, 0.70, 60, 7, 2, 5);

      $l[4] = new Lutador("Alaska", "combiana", 8, 1.12, 55, 1, 3, 1);

      $l[5] = new Lutador("Pequena", "alemã", 7, 1.01, 54, 2, 1, 4);
      // ********************************************

      // *** LOOP PARA MOSTRAR OS DADOS DE CADA LUTADOR ***

      for ($i=0; $i < 6; $i++) {
        print_r($l[$i]); 
      }

      echo "<br>--------------------------------<br>";

      $l[0]->perderLuta();

      print_r($l[0]);

    ?>
  </pre>
</body>
</html>