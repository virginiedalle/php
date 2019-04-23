<?php
// On initialise la variable avec une valeur pour donner un âge défini.
$age = 27;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1 Partie 2 PHP</title>
</head>
<body>
  <p>
    <?php
    // On effectue une condition. Si l\'âge défini est supérieur à 18, alors s\'affiche (grâce à écho), vous êtes majeur.
    if($age >= 18){
      echo 'Vous êtes majeur.';
    }else{
      // Sinon s'affiche vous êtes mineur.
      echo 'Vous êtes mineur.';
    }
    ?>
  </p>
</body>
</html>
