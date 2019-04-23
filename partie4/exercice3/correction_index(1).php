<?php
// déclaration de la fonction qui va concaténer deux chaines de caractères.
function concat($firstSentence, $secondSentence){
  // Je concatène et je stocke le résultat dans une troisième variable.
  $thirdSentence = $firstSentence . ' ' . $secondSentence;
  // Je retourne la fameuse troisième variable.
  return $thirdSentence;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>partie 4 exo 3 php</title>
</head>
<body>
  <!-- J'appelle ma fonction déclarée plus haut. -->
  <p><?= concat('Bonjour les potes !', 'Comment ça va ?') ?></p>
</body>
</html>
