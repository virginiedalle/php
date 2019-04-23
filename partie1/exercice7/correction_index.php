<?php
// Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
$lastname = 'Dupont';
$firstname = 'Jean';
$age = 18;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7 partie 1 php</title>
</head>
<body>
  <p>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.</p>
  <p>Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".</p>
  <!-- Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans". -->
  <p>Bonjour <?= $lastname . ' ' . $firstname ?>, tu as <?= $age ?> ans.</p>
</body>
</html>
