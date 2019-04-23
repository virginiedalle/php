<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="url" />
      <title>Exercice 1 Formulaires</title>
   </head>
   <body>
      <?php
      $regex = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/';
      //Si la variable n'est pas vide, donc elle existe.
      //Empty = vide
      if (!empty($_POST['lastname'])) {
         //preg_match = pour savoir si la variable correspond à la regex.
         if (preg_match($regex, $_POST['lastname'])) {
           //On stocke dans la variable $lastname, le lastname récupéré dans le formulaire.
            $lastname = $_POST['lastname'];
         } else {
            //Si la variable ne correspont pas à la regex
            $lastnameError = 'Merci de vérifier l\'écriture de votre nom de famille svp.';
              ?>
            <p><?= $lastnameError ?></p>
            <?php
         }
      } else {
         //Sinon afficher ce texte si le champ est vide quand on valide.
         $lastnameError = 'Merci d\'indiquer votre nom de famille';
      }
      if (!empty($_POST['firstname'])) {
         if (preg_match($regex, $_POST['firstname'])) {
            $firstname = $_POST['firstname'];
         } else {
            $firstnameError = 'Merci de vérifier l\'écriture de votre prénom svp.';
            ?>
            <p><?= $firstnameError ?></p>
            <?php
         }
      } else {
         $firstnameError = 'Merci d\'indiquer votre prénom';
      }
      //Si on récupère la variable $lastnameError ou $firstnameError
      if (isset($lastnameError) || isset($firstnameError)) {
         ?>
         <p>Merci de retourner à la page précédente pour remplir correctement les informations svp.</p>
         <?php
      } else {
         ?>
         <!--Sinon afficher le nom et le prénom.-->
         <p>Bonjour <?= $firstname . ' ' . $lastname ?></p>
         <?php
      }
      ?>
   </body>
</html>