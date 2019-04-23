<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7 partie 3 php</title>
</head>
<body>
  <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
  <!-- for est un autre type de boucle, dans une forme un peu plus condensée et plus commode à écrire,
  ce qui fait que for est assez fréquemment utilisé. -->
  <!-- on initialise sa variable directement dans la condition -->
  <!-- la variable $number n'est pas inférieur ou égal à 0 alors on l'incremente 15 "pas" -->
  <?php for ($number = 1; $number <= 100; $number +=15) { ?>
    <p><?= $number ?> On tient le bon bout.</p>
  <?php } ?>
</body>
</html>
