<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 5</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 5 - PHP</h1>
        <h3>Partie 1</h3>
        <p class="lead">Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur. Donner une valeur à cette variable et l'afficher.</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
      // Déclaration des variables
      $int = null;
      echo "<p>Valeur variable vide = $int</p>";
      $int = 5;
      echo "<p>Valeur variable à 5 = $int</p>";
    ?>
  </div>
</body>
</html>
