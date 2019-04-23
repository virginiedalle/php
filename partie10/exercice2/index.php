<?php
$lastName = NULL;
$firstName = NULL;
$age = NULL;
$society = NULL;

//On inclut le fichier qui contient les regex avec un require car on en a besoin pour faire les vérification
require_once 'regex.php';

$genders = array('Mme', 'Mr');

//On initialise un tableau d'erreurs vide
$formErrors = array();
/*
 * On vérifie si le tableau $_POST est vide
 * S'il est vide => le formulaire n'a pas été envoyé
 * S'il a au moins une ligne => le formulaire a été envoyé, on peut commencer les vérifications
 */
if (count($_POST) > 0) {
  /*
   * On vérifie que $_POST['lastName'] n'est pas vide
   * S'il est vide => on stocke l'erreur dans le tableau $formErrors
   * S'il n'est pas vide => on vérifie si la saisie utilisateur correspond à la regex
   */
  if (!empty($_POST['lastName'])) {
    /*
     * On vérifie si la saisie utilisateur correspond à la regex
     * Si tout va bien => on stocke dans la variable qui nous servira à afficher
     * Sinon => on stocke l'erreur dans le tableau $formErrors
     */
    if (preg_match($regexLastname, $_POST['lastName'])) {
      //On utilise la fonction strip_tags pour supprimer les éventuelles balises html => on a aucun intérêt à garder une balise html dans ce champs
      $lastName = strip_tags($_POST['lastName']);
    } else {
      $formErrors['lastName'] = 'Merci de renseigner un nom de famille valide';
    }
  } else {
    $formErrors['lastName'] = 'Merci de renseigner votre nom de famille';
  }

  if (!empty($_POST['firstName'])) {
    if (preg_match($regexFirstname, $_POST['firstName'])) {
      $firstName = strip_tags($_POST['firstName']);
    } else {
      $formErrors['firstName'] = 'Merci de renseigner un prénom valide';
    }
  } else {
    $formErrors['firstName'] = 'Merci de renseigner votre prénom';
  }


  if (!empty($_POST['society'])) {
    if (preg_match($regexSociety, $_POST['society'])) {
      $society = strip_tags($_POST['society']);
    } else {
      $formErrors['society'] = 'Merci de renseigner correctement votre Société';
    }
  } else {
    $formErrors['society'] = 'Merci de renseigner votre Société';
  }

  if (!empty($_POST['gender'])) {
         if (preg_match($genderRegex, $_POST['gender'])) {
            $gender = $_POST['gender'];
         } else {
            $formError = 'Arrête de pirater mon site !';
            ?>
            <p class="text"><?= $genderError ?></p>
            <?php
         }}

  if (!empty($_POST['age'])) {
    if (preg_match($regexAge, $_POST['age'])) {
      $age = strip_tags($_POST['age']);
    } else {
      $formErrors['age'] = 'Merci de renseigner correctement votre âge';
    }
  } else {
    $formErrors['age'] = 'Merci de renseigner votre âge';
  }

}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>TP1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div class="container">
      <form action="index.php" method="POST">
        <fieldset>
          <legend>Informations Personnel</legend>
          <hr />
          <div class="form-group row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="lastName">Nom de famille</label>
              <?php
              /*
               * On garde dans la value, $_POST['lastName'] qui est la saisie de l'utilisateur
               * Permet d'éviter à l'utilisateur de resaisir ses informations
               *
               * On ajoute la classe is-invalid si $formErrors['lastName'] existe car cette variable n'existe qu'en cas d'erreur
               * On ajoute la classe is-valid si $lastName existe car cette variable n'existe qu'en cas de saisie valide
               *
               * En cas d'erreur on crée une div invalid-feedback pour afficher le texte de l'erreur
               */
              ?>
              <input type="text" required name="lastName" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>" class="form-control <?= isset($formErrors['lastName']) ? 'is-invalid' : (isset($lastName) ? 'is-valid' : '') ?>" id="lastName" placeholder="Dupont" />
              <?php if (isset($formErrors['lastName'])) { ?>
                <div class="invalid-feedback"><?= $formErrors['lastName'] ?></div>
              <?php } ?>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <label for="firstName">Prénom</label>
              <input type="text" required name="firstName" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>"  class="form-control <?= isset($formErrors['firstName']) ? 'is-invalid' : (isset($firstName) ? 'is-valid' : '') ?>" id="firstName" placeholder="Jean" />
              <?php if (isset($formErrors['firstName'])) { ?>
                <div class="invalid-feedback"><?= $formErrors['firstName'] ?></div>
              <?php } ?>
            </div>

          </div>
          <div class="form-group row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="age">Age</label>
              <input type="number" required name="age"  value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>"class="form-control <?= isset($formErrors['age']) ? 'is-invalid' : (isset($age) ? 'is-valid' : '') ?>" id="age" placeholder="22" />
              <?php if (isset($formErrors['age'])) { ?>
                <div class="invalid-feedback"><?= $formErrors['age'] ?></div>
              <?php } ?>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <label for="society">Société</label>
              <input type="text" required name="society"  value="<?= isset($_POST['society']) ? $_POST['society'] : '' ?>"class="form-control <?= isset($formErrors['society']) ? 'is-invalid' : (isset($society) ? 'is-valid' : '') ?>" id="society" placeholder="Google" />
              <?php if (isset($formErrors['society'])) { ?>
                <div class="invalid-feedback"><?= $formErrors['society'] ?></div>
              <?php } ?>
            </div>
          </div>
          <label for="gender">Genre</label>
          <select name="gender" size="1">
             <option value="Mme" name="Mme">Mme</option>
             <option value="Mr" name="Mr">Mr</option>
          </select>
          <?php
          /*
           * On ajoute l'attribut selected si $_POST['gender'] existe
           * => si on a sélectionné quelque chose dans la liste
           */
          ?>


        </fieldset>
        <input type="submit" class="btn btn-success" value="S'inscrire" />
      </form>
      <div class="card border-secondary mb-3">
        <div class="card-header"><?= strtoupper($lastName) . ' ' . $firstName ?></div>
        <div class="card-body">
          <p class="card-text">
          <p>
            <?= $age ?><br />
            <?= $society ?><br />
            <?= $gender?><br />
          </p>
        </div>
      </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>
