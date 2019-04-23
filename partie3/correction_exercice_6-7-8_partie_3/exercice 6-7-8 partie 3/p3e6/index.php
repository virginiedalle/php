<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6 partie 3 php</title>
</head>
<body>
  <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
  <!-- for est un autre type de boucle, dans une forme un peu plus condensée et plus commode à écrire,
  ce qui fait que for est assez fréquemment utilisé. -->
  <!-- on initialise sa variable directement dans la condition -->
  <!-- la variable $number n'est pas inférieur ou égal à 0 alors on la décremente d'1 "pas" -->
  <?php for ($number = 20; $number >= 0; $number -=1) { ?>
    <p><?= $number ?> C'est presque bon.</p>
  <?php } ?>
</body>
</html>
