<?php
// On stocke dans la variable la tranche de valeur qu\'il peut y avoir.
$magnitude = 1-9;
//On stocke dans cette même variable la valeur définie. Elle doit donc être comprise entre 1 et 9.
$magnitude = 8;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/journal/bootstrap.min.css" rel="stylesheet" integrity="sha384-ciphE0NCAlD2/N6NUApXAN2dAs/vcSAOTzyE202jJx3oS8n4tAQezRgnlHqcJ59C" crossorigin="anonymous" />
<link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice 4 Partie 2 PHP</title>
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
        <a class="nav-link" href="https://github.com/La-Manu/Exercices-PHP-partie-2">Consignes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="correction_index.php">Correction</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
        <div class="d-flex w-50 justify-content-between">
          <h5 class="mb-1 text-center">Exercice 4 Partie 2 PHP</h5>
        </div>
        <p class="mb-1">
          <?php
          //On remplace le if et le else par switch et des case.
            switch($magnitude){
              case 1 :
                echo 'Micro-séisme impossible à ressentir.';
              break;
              case 2 :
                echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
              break;
              case 3 :
                echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
              break;
              case 4 :
                echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
              break;
              case 5 :
                echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
              break;
              case 6 :
                echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
              break;
              case 7 :
                echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
              break;
              case 8 :
                echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
              break;
              case 9 :
                echo 'Séisme capable de tout détruire sur une très vaste zone.';
              break;
            }
          ?>
        </p>
      </a>
    </div>

</body>
</html>
