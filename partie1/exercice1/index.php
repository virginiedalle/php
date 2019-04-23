<?php
//On déclare une variable et on lui attribue comme valeur Virginie.
$name = 'Virginie';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 Partie 1 PHP</title>
  </head>
  <body>
<!-- On affiche la variable $name.
On utilise la fonction echo qui sert à afficher.
On met echo dans des balises <p> pour un html correct. Pour le texte , éviter de le mettre dans echo. Préféré le mettre en dehors des balises php. -->
    <p>Bonjour <?php echo $name;?> </p>
<!-- < ? = est un raccourci de < ? php echo. Cependant on ne peut mettre qu'un echo dans cette balise php.  -->
    <p>Bonjour <?= $name; ?></p>
  </body>
</html>
