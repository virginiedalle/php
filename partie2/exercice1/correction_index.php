<?php
//On crée une variable âge et on l'initialise à 18. la valeur étant un nombre
//on ne met pas de quotes.
$age = 18;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1</title>
</head>
<body>
  <p>
    Créer une variable age et l'initialiser avec une valeur.
    Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur.
    Dans le cas contraire,
    afficher Vous êtes mineur.
  </p>
    <p>
      <?php
      //Si la variable âge est supérieure ou égale à 18 on affiche vous ête majeur.
      if ($age >= 18) {
        echo 'Vous êtes majeur';
      //Sinon dans tous les autres cas on affichera vous êtes mineur.
      //par exemple si on remplace 18 par du texte.  
      } else {
        echo 'Vous êtes mineur';
      }
      ?>
    </p>
  </body>
</html>
