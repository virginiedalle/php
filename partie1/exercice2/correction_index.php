<?php
$lastname = 'Glatigny'; // Ici je déclare ma variable ($lastname) avec la valeur (Glatigny) / Toujours mettre des simples cotes (économie de ressource)
$firstname = 'Francky';
$age = 35;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 2</title>
  </head>
  <body>
    <p><?php echo 'Mon nom est ' . $lastname; ?></p> <!-- Le texte peut se placer ici-->
    <p>Mon prénom est <?php echo $firstname; ?></p> <!--ou comme ceci -->
    <p><?= $age; ?></p> <!-- On peut mettre "< ?=" afin de contracter le "< ?php echo" -->
  </body>
</html>
