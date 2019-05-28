<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 4</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 4 - PHP</h1>
        <h3>Partie 1</h3>
        <p class="lead">Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix. Les afficher.</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
      // Déclaration des variables
      $string = "Chaine de caractères"; //Var type String
      $int = 5; //Var type Integer
      $float = 10.3; //Var type Float
      $boolean = true; //Var type Boolean
      // var_dump retourne le type de la variable ainsi que sa valeur
      var_dump($string);
      var_dump($int);
      var_dump($float);
      var_dump($boolean);
    ?>
  </div>
</body>
</html>
