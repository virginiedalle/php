<?php
//On déclare un booléen qu'on initialise à true.
//On ne met pas de quotes car c'est un booléen.
//Comme on attribut une valeur à une variable on ne met qu'un seul =
// 0=false 1=true.
$isEasy = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2</title>
</head>
<body>
  <?php
  //On utilise le == pour faire une comparaison.
  //On pourrait utiliser le === pour comparer strictement(comparer le type et la valeur).
  if($isEasy == true){
    ?>
    <p>C'est facile!!</p>
  <?php }else{ ?>
    <p>C'est difficile!!</p>
  <?php } ?>
  <!-- Correction bonus -->
  <?php if($isEasy){ ?>
    <p>C'est facile!!</p>
  <?php }else{ ?>
    <p>C'est difficile!!</p>
  <?php } ?>
</body>
</html>
