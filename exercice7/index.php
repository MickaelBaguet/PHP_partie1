<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 7</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 7 - PHP</h1>
        <h3>Partie 1</h3>
        <p class="lead">Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
        // Déclaration de plusieurs variables
        $lastname = "Baguet";
        $firstname = "Mickael";
        $age = 27;
        // Affichage de la variable
        // Concaténation de variable grace au point (.)
        echo "Inclinez vous devant ".$lastname." ".$firstname." et ces ".$age." printemps !";
        // echo "Inclinez vous devant $lastname $firstname et ces $age printemps !";
      ?>
  </div>
</body>
</html>
