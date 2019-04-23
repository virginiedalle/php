<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

function test($portrait) {?>
  <p><?= $portrait['name'] ?></p>
  <p><?= $portrait['firstname'] ?></p>
  <img src="<?= $portrait['portrait'] ?>"  />
<?php } ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/journal/bootstrap.min.css" rel="stylesheet" integrity="sha384-ciphE0NCAlD2/N6NUApXAN2dAs/vcSAOTzyE202jJx3oS8n4tAQezRgnlHqcJ59C" crossorigin="anonymous" />
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 3 Partie 10 PHP</title>
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
                     <h1 class="mb-1 text-center">Exercice 3 Partie 10 PHP</h1>
                  </div>

                  <?php test($portrait1);
                  test($portrait2);
                  test($portrait3);
                  test($portrait4); ?>
               </a>
            </div>
         </div>
      </div>
   </body>
</html>
