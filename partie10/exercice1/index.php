<?php
$regexMail = '#^[\wÀ-ÖØ-öø-ÿ._-]+@[\w.-_]+[.][a-z]+$#';
$regexPseudo = '#^[a-zA-Z0-9À-ÖØ-öø-ÿ~$£\'&¤{}._-]+[\s]{0,1}[a-zA-Z0-9À-ÖØ-öø-ÿ~$£\'&¤{}._-]+$#';
$regexLastname = '#^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$#';
$regexFirstname = '#^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$#';
$regexAge = '#^[1-9]{1}[0-9]{0,1}$#';
$regexJob = '#^[A-Za-zÀ-ÖØ-öø-ÿ\']+[\s]{0,1}[A-Za-zÀ-ÖØ-öø-ÿ\']+[\s]{0,1}[A-Za-zÀ-ÖØ-öø-ÿ\']+$#';
$regexPhoneNumber = '#^[0][1-9][0-9]{8}$#';
//De 1 à 22 clients.
$regexCustomer = '#^([1-9]|1[0-9]|2[0-2])$#';
// $regexHours =
$regexPlace = '#[A-Za-zÀ-ÖØ-öø-ÿ]+[-\s]{0,1}[A-Za-zÀ-ÖØ-öø-ÿ]+[-\s]{0,1}[A-Za-zÀ-ÖØ-öø-ÿ]+#';
$regexSiret = '#[0-9]{14}#';
$regexCountry = '#^[A-Za-zÀ-ÖØ-öø-ÿ]+([- ]{0,1}[A-Za-zÀ-ÖØ-öø-ÿ]+){0,1}$#';
$regexAdress = '#[0-9A-Za-zÀ-ÖØ-öø-ÿ\-\s]+#';
$regexPoleEmploi = '#[0-9]{7}[A-Z]{1}#';
$regexUrlCodecademy = '#https:\/\/www.codecademy.com\/{1}[a-z0-9]+#';
$regexGender = '#Mr|Mme{1}#';
$regexBadges = '#^[0-9]+$#';
$regexBirthday = '#^\d{4}[-](0?[1-9]|1[012])[-](0?[1-9]|[12][0-9]|3[01])$#';
$formErrors = array();

if (count($_POST) > 0) {
   // on vérifie que la variable $_POST['lastname'] existe ET n'est pas vide.
   if (!empty($_POST['lastname'])) {
      // Je vérifie bien que ma variable $_POST['lastname'] correspond à ma regexLastname.
      if (preg_match($regexLastname, $_POST['lastname'])) {
         // On stocke dans la variable lastname la variable $_POST['lastname'] dont on a désactivé les balises HTML.
         $lastname = htmlspecialchars($_POST['lastname']);
      } else {
         // Si la saisie utilisateur ne correspond pas à la regex on va stocker une erreur lastName dans notre tableau d'erreurs.
         $formErrors['lastname'] = 'Votre nom de famille est incorrect.';
      }
   } else {
      // On va réutiliser notre erreur lastName parce que les deux ne peuvent pas exister en même temps.
      $formErrors['lastname'] = 'Veuillez renseigner votre nom de famille.';
   }

   if (!empty($_POST['firstname'])) {
      if (preg_match($regexFirstname, $_POST['firstname'])) {
         $firstname = htmlspecialchars($_POST['firstname']);
      } else {
         $formErrors['firstname'] = 'Votre prénom est incorrect.';
      }
   } else {
      $formErrors['firstname'] = 'Veuillez renseigner votre prénom.';
   }

   if (!empty($_POST['birthday'])) {
      if (preg_match($regexBirthday, $_POST['birthday'])) {
         $birthday = htmlspecialchars($_POST['birthday']);
      } else {
         $formErrors['birthday'] = 'Votre date de naissance est incorrect.';
      }
   } else {
      $formErrors['birthday'] = 'Veuillez renseigner votre date de naissance.';
   }

   if (!empty($_POST['nativeCountry'])) {
      if (preg_match($regexPlace, $_POST['nativeCountry'])) {
         $nativeCountry = htmlspecialchars($_POST['nativeCountry']);
      } else {
         $formErrors['nativeCountry'] = 'Votre pays de naissance est incorrect.';
      }
   } else {
      $formErrors['nativeCountry'] = 'Veuillez renseigner votre pays de naissance.';
   }

   if (!empty($_POST['nationality'])) {
      if (preg_match($regexPlace, $_POST['nationality'])) {
         $nationality = htmlspecialchars($_POST['nationality']);
      } else {
         $formErrors['nationality'] = 'Votre nationalité est incorrect.';
      }
   } else {
      $formErrors['nationality'] = 'Veuillez renseigner votre nationalité.';
   }

   if (!empty($_POST['adress'])) {
      if (preg_match($regexAdress, $_POST['adress'])) {
         $adress = htmlspecialchars($_POST['adress']);
      } else {
         $formErrors['adress'] = 'Votre adresse est incorrect.';
      }
   } else {
      $formErrors['adress'] = 'Veuillez renseigner votre adresse.';
   }

   if (!empty($_POST['mail'])) {
      if (preg_match($regexMail, $_POST['mail'])) {
         $mail = htmlspecialchars($_POST['mail']);
      } else {
         $formErrors['mail'] = 'Votre e-mail est incorrect.';
      }
   } else {
      $formErrors['mail'] = 'Veuillez renseigner votre e-mail.';
   }

   if (!empty($_POST['phone'])) {
      if (preg_match($regexPhoneNumber, $_POST['phone'])) {
         $phone = htmlspecialchars($_POST['phone']);
      } else {
         $formErrors['phone'] = 'Votre numéro de téléphone est incorrect.';
      }
   } else {
      $formErrors['phone'] = 'Veuillez renseigner votre numéro de téléphone.';
   }

   if (!empty($_POST['diploma'])) {
      if ($_POST['diploma'] === 'nothing' || $_POST['diploma'] === 'bac' || $_POST['diploma'] === 'bac2' || $_POST['diploma'] === 'bac3') {
         $diploma = $_POST['diploma'];
      } else {
         $formErrors['diploma'] = 'Votre diplôme est incorrecte';
      }
   } else {
      $formErrors['diploma'] = 'Veuillez renseigner votre diplôme';
   }

   if (!empty($_POST['poleEmploi'])) {
      if (preg_match($regexPoleEmploi, $_POST['poleEmploi'])) {
         $poleEmploi = htmlspecialchars($_POST['poleEmploi']);
      } else {
         $formErrors['poleEmploi'] = 'Votre numéro Pôle Emploi est incorrect.';
      }
   } else {
      $formErrors['poleEmploi'] = 'Veuillez renseigner votre numéro Pôle Emploi.';
   }

   if (!empty($_POST['badges'])) {
      if (preg_match($regexBadges, $_POST['badges'])) {
         $badges = htmlspecialchars($_POST['badges']);
      } else {
         $formErrors['badges'] = 'Votre numéro de badges est incorrect.';
      }
   } else {
      $formErrors['badges'] = 'Veuillez renseigner votre nombre de bages';
   }

   if (!empty($_POST['codeCademy'])) {
      if (preg_match($regexUrlCodecademy, $_POST['codeCademy'])) {
         $codeCademy = htmlspecialchars($_POST['codeCademy']);
      } else {
         $formErrors['codeCademy'] = 'Votre lien codecademy est incorrect.';
      }
   } else {
      $formErrors['codeCademy'] = 'Veuillez renseigner votre lien codecademy.';
   }

   if (!empty($_POST['heroes'])) {
      $heroes = htmlspecialchars($_POST['heroes']);
   } else {
      $formErrors['heroes'] = 'Votre texte est incorrect.';
   }

   if (!empty($_POST['hack'])) {
      $hack = htmlspecialchars($_POST['hack']);
   } else {
      $formErrors['hack'] = 'Votre texte est incorrect.';
   }

   if (!empty($_POST['select'])) {
      if ($_POST['select'] === 'Oui' || $_POST['select'] === 'Non') {
         $select = $_POST['select'];
      } else {
         $formErrors['select'] = 'Votre choix est incorrecte';
      }
   } else {
      $formErrors['select'] = 'Veuillez renseigner votre choix';
   }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/journal/bootstrap.min.css" rel="stylesheet" integrity="sha384-ciphE0NCAlD2/N6NUApXAN2dAs/vcSAOTzyE202jJx3oS8n4tAQezRgnlHqcJ59C" crossorigin="anonymous" />
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 1 Partie 10 PHP</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <a class="navbar-brand" href="#">PHP</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="#">Exercice<span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="https://github.com/La-Manu/Exercices-PHP-partie-10">Consignes</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Correction</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="row">
         <div class="col-8">
            <div class="list-group col-8">
               <a class="list-group-item list-group-item-action flex-column align-items-start active">
                  <div class="d-flex w-50 justify-content-between">
                     <h1 class="mb-1 text-center">Exercice 1 Partie 10 PHP</h1>
                  </div>
                  <?php
                  // On affiche le formulaire si rien a été envoyé ou qu'il y a une erreur dans ce qui à été saisi.
                  if (count($_POST) == 0 || count($formErrors) > 0) {
                     ?>
                     <form  method="POST" action="index.php">
                        <div class="form-group">
                           <label for="lastname">Nom : </label>
                           <input type="text" name="lastname" id="lastname" placeholder="Doe" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>"/>
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['lastname'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['lastname'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="firstname">Prénom : </label>
                           <input type="text" name="firstname" id="firstname" placeholder="John" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" />
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['firstname'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['firstname'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="birthday">Date de naissance : </label>
                           <input type="date" name="birthday" id="birthday"  />
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['birthday'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['birthday'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="nativeCountry">Pays de naissance : </label>
                           <input type="text" name="nativeCountry" id="nativeCountry"  placeholder="France" value="<?= isset($_POST['nativeCountry']) ? $_POST['nativeCountry'] : '' ?>" />
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['nativeCountry'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['nativeCountry'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="nationality">Nationalité : </label>
                           <input type="text" name="nationality" id="nationality" placeholder="Française" value="<?= isset($_POST['nationality']) ? $_POST['nationality'] : '' ?>"/>
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['nationality'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['nationality'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="adress">Adresse : </label>
                           <input type="text" name="adress" id="adress"  placeholder="5 rue du chemin 75000 PARIS" value="<?= isset($_POST['adress']) ? $_POST['adress'] : '' ?>"/>
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['adress'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['adress'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="mail">Email : </label>
                           <input type="email" name="mail" id="mail"  placeholder="doejohn@mail.fr" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>" />
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['mail'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['mail'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="phone">Téléphone : </label>
                           <input type="text" name="phone" id="phone"  placeholder="0323333333" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" />
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['phone'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['phone'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="diploma">Diplômes : </label>
                           <select name="diploma" size="1" id="diploma">
                              <option value="choice" name="choice" disabled selected>Merci de faire votre choix</option>
                              <option value="nothing" name="nothing">Sans</option>
                              <option value="bac" name="bac">Bac</option>
                              <option value="bac2" name="bac2">Bac +2</option>
                              <option value="bac3" name="bac3">Bac +3 ou supérieur</option>
                           </select>
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['diploma'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['diploma'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="poleEmploi">Numéro Pôle Emploi : </label>
                           <input type="text" name="poleEmploi" id="poleEmploi" placeholder="9988776A" value="<?= isset($_POST['poleEmploi']) ? $_POST['poleEmploi'] : '' ?>" />
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['poleEmploi'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['poleEmploi'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>

                        <div class="form-group">
                           <label for="badges">Nombre de badges : </label>
                           <input type="text" name="badges" id="badges"  min="0"  value="<?= isset($_POST['badges']) ? $_POST['badges'] : '' ?>" />
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['badges'])) {
                              ?>
                              <div class="alert-danger">
                                
                                 <p><?= $formErrors['badges'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>

                        <div class="form-group">
                           <label for="codeCademy">Lien codecademy : </label>
                           <input type="url" name="codeCademy" id="codeCademy" placeholder="https://www.codecademy.com/" value="<?= isset($_POST['codeCademy']) ? $_POST['codeCademy'] : '' ?>" />
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['codeCademy'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['codeCademy'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="heroes">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? </label>
                           <textarea name="heroes" id="heroes" ><?= isset($_POST['heroes']) ? $_POST['heroes'] : '' ?></textarea>
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['heroes'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['heroes'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : </label>
                           <textarea name="hack" id="hack" ><?= isset($_POST['hack']) ? $_POST['hack'] : '' ?></textarea>
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['hack'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['hack'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <div class="form-group">
                           <label for="experiences">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </label>
                           <label for="yes">Oui</label> <input type="radio" name="select" value="Oui" id="yes" checked />
                           <label for="no">Non</label> <input type="radio" name="select" value="Non" id="no" checked />
                           <?php
                           // On affiche un alerte rouge qui contient le texte de l'erreur s'il y en à une.
                           if (isset($formErrors['select'])) {
                              ?>
                              <div class="alert-danger">
                                 <p><?= $formErrors['select'] ?></p>
                              </div>
                           <?php }
                           ?>
                        </div>
                        <input type="submit" name="valid" value="Valider" />
                     </form>
                     <?php
                  } else {
                     ?>
                     <div class="alert-success">
                        <p>Vos données ont bien été envoyées et votre fichier a bien été transmis.</p>
                     </div>
                     <div class="well jumbotron">
                        <p>
                           Nom : <?= $lastname ?> <br />
                           Prénom : <?= $firstname ?> <br />
                           Date de naissance : <?= $birthday ?> <br />
                           Pays de naissance : <?= $nativeCountry ?> <br />
                           Nationalité : <?= $nationality ?> <br />
                           Adresse : <?= $adress ?> <br />
                           Email : <?= $mail ?> <br />
                           Téléphone : <?= $phone ?> <br />
                           Diplômes : <?= $diploma ?> <br />
                           Numéro Pôle Emploi : <?= $poleEmploi ?> <br />
                           Nombre de badges : <?= $badges ?> <br />
                           Lien codecademy : <?= $codeCademy ?> <br />
                           Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?  : <?= $heroes ?> <br />
                           Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :  <?= $hack ?> <br />
                           Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?  <?= $select ?> <br />
                        </p>
                        <a href="index.php" title="Retour vers le formulaire" class="btn btn-info">Ajouter un nouvel utilisateur</a>
                     </div>
                  <?php } ?>
               </a>
            </div>
         </div>
      </div>
   </body>
</html>
