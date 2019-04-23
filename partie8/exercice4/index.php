<?php
//On initialise les variables à NULL.
$login = NULL;
$password = NULL;
$loginError = NULL;
$loginRegex = '/^[a-zA-ZÀ-ÖØ-öø-ÿa-zÀ-ÖØ-öø-ÿ0-9]+[-]{0,1}+[a-zA-ZÀ-ÖØ-öø-ÿa-zÀ-ÖØ-öø-ÿ0-9]+$/';
//On vérifie si les champs login et password ne sont pas vides.
if (!empty($_GET['login']) && !empty($_GET['password'])) {
   //On vérifie si la regex correspond avec le login rentré.
   if (preg_match($loginRegex, $_GET['login'])) {
      //On définit un ou plusieurs cookies qui seront envoyés.
      setcookie('login', $_GET['login']);
      setcookie('password', $_GET['password']);
      //On stocke dans des variables ce qui a été saisi dans les champs.
      $login = $_GET['login'];
      $password = $_GET['password'];
   } else {
      $loginError = 'Merci d\'entrer un login correct.';
   }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="assets/css/style.css" />
      <title>Partie 8 Exercice 4 PHP </title>
   </head>
   <body>
      <form class="form" action="index.php" method="get">
         <input type="text" name="login" id="login" placeholder="Pseudo" required />
         <p><?= 
         // La ternaire permet de vérifier si le champ login existe. Si la saisie est bonne elle affiche la variable login, sinon la variable loginError.
         isset($login) ? $login : $loginError; 
            ?>
         </p>
         <input type="password" name="password" id="password" placeholder="Mot de passe" required />
         <p><?= $password  ?></p>
         <input type="submit" value="Valider" name="valid" />
      </form>  
   </body>
</html>