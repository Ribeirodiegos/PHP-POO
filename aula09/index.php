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
      require_once 'Livro.php';
      require_once 'Publicacao.php';


      $p[0] = new Pessoa("Diego", 30, "Masculino");
      $p[1] = new Pessoa("Isis", 4, "Feminino");

  

      $l[0] = new Livro("PHP Basico", "Jose da Silva", 300, $p[0]);
      $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
      $l[2] = new Livro("PHP Avancado", "Eduardo Aparecido", 800, $p[1]);
      
      $l[1]->abrir();
      $l[1]->folhear(94);

      $l[1]->detalhes();
      

      // print_r($p[0]);
      // print_r($p[1]);
      // print_r($l[0]);
      // print_r($l[1]);
      // print_r($l[2]);


    ?>
  </pre>
</body>
</html>