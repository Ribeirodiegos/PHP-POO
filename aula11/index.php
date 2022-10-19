<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 11</title>
</head>
<body>
  <pre>
    <?php
      require_once 'Visitante.php';
      require_once 'Aluno.php';
      require_once 'Bolsista.php';

      echo "-------------------- TESTE 1 -------------------- <br>";
      $v1 = new Visitante();
      $v1->setNome("Diego");
      $v1->setIdade(30);
      $v1->setSexo("Masculino");
      print_r($v1);

      echo "   -------------------- TESTE 2 -------------------- <br>";
      $a1 = new Aluno;
      $a1->setNome("Isis");

      print_r($a1);
      $a1->pagarMensalidade();

      echo "   -------------------- TESTE 3 -------------------- <br>";

      $b1 = new Bolsista;
      $b1->setNome("Olivia");
      $b1->setIdade(1);
      $b1->setSexo("Feminino");
      $b1->setMatricula(1111);
      $b1->setCurso("Pre-escola");

      print_r($b1);

      $b1->pagarMensalidade();


    ?>
  </pre>
</body>
</html>