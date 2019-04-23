<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="assets/css/style.css" />
      <title>Exercice 1 Formulaires</title>
   </head>
   <body>
      <?php
      $regexName = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/';
      //Si la variable existe ET qu'elle n'est pas vide
      if (!empty($_GET['lastname'])) {
         //Si la variable correspond à la regex
         if (preg_match($regexName, $_GET['lastname'])) {
            $lastname = HTML_SPECIALCHARS ($_GET['lastname']);
         } else {
            //Si la variable ne correspont pas à la regex
            $lastnameError = 'Merci d\'indiquer CORRECTEMENT votre nom de famille svp.';
              ?>
            <p><?= $lastnameError ?></p>
            <?php
         }
      } else {
         //Sinon soit la variable ne s'est pas envoyé soit la personne n'a pas rempli le champ
         $lastnameError = 'Merci d\'indiquer votre nom de famille';
      }
      if (!empty($_GET['firstname'])) {
         if (preg_match($regexName, $_GET['firstname'])) {
            $firstname = $_GET['firstname'];
         } else {
            //Si la variable ne correspont pas à la regex
            $firstnameError = 'Merci d\'indiquer CORRECTEMENT votre prénom svp.';
            ?>
            <p><?= $firstnameError ?></p>
            <?php
         }
      } else {
         //Sinon soit la variable ne s'est pas envoyé soit la personne n'a pas rempli le champ
         $firstnameError = 'Merci d\'indiquer votre prénom';
      }
      if (isset($lastnameError) || isset($firstnameError)) {
         ?>
         <p>Merci de retourner à la page précédente</p>
         <?php
      } else {
         ?>
         <p>Bonjour <?= $firstname . ' ' . $lastname ?></p>
         <?php
      }
      ?>
   </body>
</html>
