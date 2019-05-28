<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 3</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 3 - PHP</h1>
        <h3>Partie 1</h3>
        <p class="lead">Créer une variable km. L'initialiser à 1. Afficher son contenu. Changer sa valeur par 3. Afficher son contenu. Changer sa valeur par 125. Afficher son contenu.</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
      // Déclaration de la variable
      $km = 1;
      // Affichage de la variable
      echo "<p>$km kilomètre à pieds, ça use, ça use.</p>";
      $km = 3;
      // Affichage de la variable
      echo "<p>$km kilomètre à pieds, ça use, ça use.</p>";
      $km = 125;
      // Affichage de la variable
      echo "<p>$km kilomètre à pieds, ça use, ça use.</p>";
    ?>
  </div>
</body>
</html>
