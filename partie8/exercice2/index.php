<?php session_start();
  $_SESSION['lastname'] = 'Int';
  $_SESSION['firstname'] = 'Polo';
  $_SESSION['age'] = 15;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/journal/bootstrap.min.css" rel="stylesheet" integrity="sha384-ciphE0NCAlD2/N6NUApXAN2dAs/vcSAOTzyE202jJx3oS8n4tAQezRgnlHqcJ59C" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Exercice 2 Partie 8 PHP</title>
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
          <a class="nav-link" href="https://github.com/La-Manu/Exercices-PHP-partie-8" title="consignes">Consignes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" title="correction">Correction</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="list-group">
    <div class="list-group-item list-group-item-action flex-column align-items-start active" title="nothing">
      <div class="d-flex w-50 justify-content-between">
        <h1 class="mb-1 text-center">Exercice 2 Partie 8 PHP</h1>
      </div>
      <p class="mb-1">
      <a href="users.php" class="link">Lien vers users.php</a>
      </p>
    </div>
  </div>
</body>
</html>
