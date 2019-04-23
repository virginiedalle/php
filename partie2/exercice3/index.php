<?php
// On stocke les valeurs dans les variables.
$age = 27;
// Ici la valeur femme est définie.
$gender = 'femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 3 Partie 2 PHP</title>
</head>
<body>
  <p>
    <?php
    if($gender == 'homme' && $age >= 18){
      echo 'Vous êtes un homme et vous êtes majeur.';
    }elseif($gender == 'homme' && $age < 18){
      echo 'Vous êtes un homme et vous êtes mineur.';
    }elseif($gender == 'femme' && $age >= 18){
      echo 'Vous êtes une femme et vous êtes majeur.';
    }elseif($gender == 'femme' && $age < 18){
      echo 'Vous êtes une femme et vous êtes mineur.';
    };
    ?>
  </p>
</body>
</html>
