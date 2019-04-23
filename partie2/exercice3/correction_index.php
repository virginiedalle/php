<?php
$age = 20;
$gender = 'femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 3 Partie 2 php</title>
</head>
<body>
  <!-- Créer deux variables age et gender. La variable gender peut prendre comme valeur :
  Homme
  Femme
  En fonction de l'âge et du genre afficher la phrase correspondante :
  Vous êtes un homme et vous êtes majeur
  Vous êtes un homme et vous êtes mineur
  Vous êtes une femme et vous êtes majeur
  Vous êtes une femme et vous êtes mineur
  Gérer tous les cas. -->
  <?php if ($gender == 'femme' && $age < 18 && $age > 0) { ?>
    <p class="youngWoman">Vous êtes une femme et vous êtes mineur</p>
  <?php } else if ($gender == 'femme' && $age >= 18 && $age < 100) { ?>
    <p class="oldWoman">Vous êtes une femme et vous êtes majeur</p>
  <?php } else if ($gender == 'homme' && $age < 18 && $age > 0) { ?>
    <p class="youngMan">Vous êtes un homme et vous êtes mineur</p>
  <?php } else if ($gender == 'homme' && $age >= 18 && $age < 100) { ?>
    <p class="oldMan">Vous êtes un homme et vous êtes majeur</p>
  <?php } else if ($gender != 'homme' && $gender != 'femme') { ?>
    <p class="oldMan">Merci d'entrer un genre valide</p>
  <?php } else { ?>
    <p class="oldMan">Merci d'entrer un age valide</p>
  <?php } ?>
</body>
</html>
