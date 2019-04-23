<?php
//on déclare une variable et on lui attribue la valeur moussa
$name = 'moussa';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp1e1</title>
  </head>
  <body>
<!--On affiche la variable $name
  On utilise la fonction echo qui sert à afficher
  On echo notre variable entre les balises <p> pour afficher dans du html correctement formé
-->
    <p> bonjour <?php echo $name; ?></p>
<!--< ? = ? > est un raccourci pour < ? = php echo ? >-->
    <p> bonjour <?= $name; ?></p>
  </body>
</html>
