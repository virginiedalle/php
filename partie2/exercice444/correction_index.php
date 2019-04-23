<?php
$richter = 2;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 4 Partie 2 php</title>
</head>
<body>
  <!-- L'échelle de Richter est un outil de mesure qui permet de définir la magnitude
  de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
  Créer une variable magnitude. Selon la valeur de magnitude, afficher la
  phrase correspondante. -->
  <?php
  // Le switch est utilisé pour une condition basique.
  switch ($richter)
  {
    // Dans la cas ou $richter est égal à 1:
    case 1:
    ?>
    <p>Micro-séisme impossible à ressentir.</p>
    <?php
    // break est utilisé pour arrêter le switch une fois que nous sommes passés dans la bonne condtion.
    break;
    case 2:
    ?>
    <p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p>
    <?php
    break;
    case 3:
    ?>
    <p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p>
    <?php
    break;
    case 4:
    ?>
    <p>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p>
    <?php
    break;
    case 5:
    ?>
    <p>Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p>
    <?php
    break;
    case 6:
    ?>
    <p>Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.</p>
    <?php
    break;
    case 7:
    ?>
    <p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p>
    <?php
    break;
    case 8:
    ?>
    <p>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p>
    <?php
    break;
    case 9:
    ?>
    <p>Séisme capable de tout détruire sur une très vaste zone.</p>
    <?php
    break;
    // équivalent du else.
    default :
    ?>
    <p>Merci de rentrer un niveau valide !</p>
    <?php
  }
  ?>
</body>
</html>
