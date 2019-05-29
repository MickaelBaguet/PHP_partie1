<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 8</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 8 - PHP</h1>
        <h3>Partie 1</h3>
        <p class="lead">Créer 3 variables. Dans la première mettre le résultat de l'opération 3 + 4. Dans la deuxième mettre le résultat de l'opération 5 * 20. Dans la troisième mettre le résultat de l'opération 45 / 5. Afficher le contenu des variables.</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
        // Déclaration de plusieurs variables
        $add = 3+4;
        $mult= 5*20;
        $div = 45/5;
        echo '<p>Résultat de l\'addition : '.$add.'</p>';
        echo '<p>Résultat de la multiplication : '.$mult.'</p>';
        echo '<p>Résultat de la division : '.$div.'</p>';
      ?>
  </div>
</body>
</html>
