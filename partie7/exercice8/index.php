<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/journal/bootstrap.min.css" rel="stylesheet" integrity="sha384-ciphE0NCAlD2/N6NUApXAN2dAs/vcSAOTzyE202jJx3oS8n4tAQezRgnlHqcJ59C" crossorigin="anonymous" />
      <link rel="stylesheet" href="assets/css/style.css" />
      <title>Exercice 8 Partie 7 PHP</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <a class="navbar-brand" href="#" title="php">PHP</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="#" title="exercise">Exercice<span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="https://github.com/La-Manu/Exercices-PHP-partie-7" title="statement">Consignes</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#" title="correction">Correction</a>
               </li>
            </ul>
         </div>
      </nav>

      <?php
      $regex = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/';
      $genderRegex = '/Mr|Mme{1}/';
      $imageRegex = '/[a-zA-Z0-9]+.pdf{1}/';
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
            <p class="text"><?= $lastnameError ?></p>
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
            <p class="text"><?= $firstnameError ?></p>
            <?php
         }
      } else {
             $firstnameError = 'Merci d\'indiquer votre prénom';
      }
      if (!empty($_POST['gender'])) {
         if (preg_match($genderRegex, $_POST['gender'])) {
            $gender = $_POST['gender'];
         } else {
            $genderError = 'Arrête de pirater mon site !';
            ?>
            <p class="text"><?= $genderError ?></p>
            <?php
         }

         //On vérifie que le $_files n'est pas vide, qu'il contient bien un fichier.
         if (!empty($_FILES['image']['name'])) {
          //On compare l'extension du fichier avec la regex.
            if (preg_match($imageRegex, $_FILES['image']['name'])) {
         //On récupère le nom du fichier et son extension, ici une image.pdf
               $_FILES['image']['name']; 
         //On stocke dans la variable le nom et l'extension du fichier.
               $fileName = $_FILES['image']['name']; 
               ?>
               <p class="text">Lien :  <?= $fileName ?></p>            
               <?php
            } else {
               //Si ça ne correspond pas à la regex ou si c'est vide, alors ça affiche image non valide.
               echo 'Image non valide';
            }
         }
      } else {
         $firstnameError = 'Merci d\'indiquer votre prénom';
      }
      //Si on récupère la variable $lastnameError ou $firstnameError
      if (isset($lastnameError) || isset($firstnameError) || isset($genderError)) {
         ?>
         <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active" title="list">
               <div class="d-flex w-50 justify-content-between">
                  <h1 class="mb-1 text-center">Exercice 8 Partie 7 PHP</h1>
               </div>
               <form class="form" action="index.php" method="post" enctype="multipart/form-data">
                  <select name="gender" size="1"> 
                     <option value="Mme" name="Mme">Mme</option>
                     <option value="Mr" name="Mr">Mr</option>
                  </select>
                  <input type="text" name="lastname" id="lastname" placeholder="Nom" value="<?php
                  if (isset($_POST['lastname'])) {
                     echo $_POST['lastname'];
                  }
                  ?>"required />
                  <input type="text" name="firstname" id="firstname" placeholder="Prénom" value="<?php
                  if (isset($_POST['firstname'])) {
                     echo $_POST['firstname'];
                  }
                  ?>" required />
                  <!-- On limite le fichier à 100Ko et on cache l'input. -->
                  <input type="hidden" name="maxFileSize" value="100000" />
                  <label for="image">Fichier : </label><input type="file" name="image" id="image" />
                  <input type="submit" value="Valider" name="valid" />
               </form>
            </a>
         </div>
         <p class="text">Merci de compléter les informations svp.</p>
         <?php
      } else {
         ?>
         <!--Sinon afficher le nom et le prénom.-->
         <p class="text">Bonjour <?= $gender . ' ' . $firstname . ' ' . $lastname ?></p>
         <?php
      }
      ?>
   </body>
</html>
