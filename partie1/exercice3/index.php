<?php
$km = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 3 Partie 1 PHP</title>
</head>
<body>
  <p>
    <?php echo $km; ?>
  <!-- ou  < ?= $km ?> -->
  </p>
  <p>
    <?php
    $km = 3;
    echo $km;
    ?>
  </p>
  <p>
    <?php
    $km = 125;
    echo $km;
    ?>
  </p>
</body>
</html>
