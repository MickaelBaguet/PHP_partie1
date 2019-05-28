<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 1</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 1 - PHP</h1>
        <h3>Partie 1</h3>
        <p class="lead">Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher son contenu.</p>
      </div>
    </div>
    <p>On déclare un variable $name = "Mickael"</p>
    <p>Puis on l'affiche avec un echo $name</p>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
    // Déclaration d'une variable contenant une chaine de carac
    $name = "Mickael";
    // Affichage de la variable
    echo $name;
    ?>
  </div>
</body>
</html>
