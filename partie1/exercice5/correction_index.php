<?php
/* On type une variable pour éviter les problèmes de conversion.
Surtout utilisé pour les nouvelles versions de PHP.
settype prend en paramètres le nom de la variable et son type entre ''.*/
settype($int,'int');
//NULL c'est littéralement RIEN.
$int = NULL;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>exercice 5</title>
   </head>
   <body>
     <p><?php echo $int; ?></p>
     <?php $int = 21; ?>
     <p><?php echo $int; ?></p>
   </body>
 </html>
