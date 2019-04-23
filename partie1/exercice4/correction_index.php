<?php
/*Les variables de type string sont entourées de quotes,
les variables de type int, float et boolean n'en prennent pas.*/
$string = 'Bonjour !';
$int = 42;
$float = 4.2;
/*Si le boolean est égal à false, soit il affichera 0 soit
il n'affichera rien.
S'il est égal à true, il affichera 1.*/
$boolean = false;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>exo 4 partie 1 php</title>
</head>
<body>
  <p>La variable string vaut : <?= $string ?></p>
  <p>La variable int vaut : <?= $int ?></p>
  <p>La variable float vaut : <?= $float ?></p>
  <p>La variable boolean vaut : <?= $boolean ?></p>
</body>
</html>
