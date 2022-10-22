<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 14</title>
</head>
<body>
  <pre>
    <?php
      require_once 'Video.php';
      require_once 'Gafanhoto.php';
      require_once 'Visualizacao.php';
      require_once 'visualizacao.php';


      echo "---------- TESTE 1 ----------<br>";
      $v[0] = new Video("Aula 1 de POO");
      $v[1] = new Video("Aula 12 de PHP");
      $v[2] = new Video("Aula 15 de HTML5");
      print_r($v);

      echo "---------- TESTE 2 ----------<br>";
      $g[0] = new Gafanhoto("Diego", 30, "Masculino", "diego.ribeiro");
      $g[1] = new Gafanhoto("Carol", 32, "Feminino", "carol.maser");
      print_r($g);

      echo "---------- TESTE 3 ----------<br>";
      $vis[0] = new Visualizacao($g[0], $v[2]);
      $vis[1] = new Visualizacao($g[1], $v[1]);
      

      print_r($vis);

      echo "---------- TESTE 4 ----------<br>";
      $vis[0]->avaliar();
      $vis[1]->avaliarPorc(85);
      print_r($vis);




    ?>
  </pre>
</body>
</html>