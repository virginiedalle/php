<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Exercice 2 Partie 8 PHP</title>
  </head>
  <body>
  <p>Nom : <?= $_SESSION['lastname']; ?></p>
  <p>Prénom : <?= $_SESSION['firstname']; ?></p>
  <p>Age : <?= $_SESSION['age']; ?></p>
  </body>
</html>
