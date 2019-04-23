<?php
// On initialise la variable avec un boolean, ici true.
$isEasy = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2 Partie 2 PHP</title>
</head>
<body>
  <p>
    <?php
    if($isEasy == true){
      echo 'C\'est facile !!';
    }else{
      echo 'C\'est difficile.';
    }
    ?>
  </p>
</body>
</html>
