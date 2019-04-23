<?php
$lastname = 'Dalle';
$firstname = 'Virginie';
$age = 27;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2 Partie 1 PHP</title>
  </head>
  <body>
    <p>
      <?php
      echo 'Je m\'appelle ' . $lastname . ' ' . $firstname . ', j\'ai ' . $age . ' ans.';
      ?>
    </p>
  </body>
</html>
