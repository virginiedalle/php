<?php //je déclare ma fonction (ATTENTION, une fonction ne peut contenir qu'un seul return).
 function compare($firstNumber, $secondNumber){
   // On commence par le cas le moins probable: l'égalité.
  if($firstNumber == $secondNumber){
    $message = 'Les deux nombres sont identiques.';
    // SINON SI le premier est le plus petit:
  }else if($firstNumber < $secondNumber){
    $message = 'Le premier nombre est le plus petit.';
    // Sinon, il ne reste plus qu'un cas.
  }else{
    $message = 'Le premier nombre est le plus grand.';
  }
  // Je retourne le message correspondant.
  return $message;
} ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Partie 4 exo 4 php</title>
</head>
<body>
  <!-- J'appelle ma fonction et je lui passe deux nombres en paramètres. -->
  <p><?= compare(2,2) ?></p>
</body>
</html>
