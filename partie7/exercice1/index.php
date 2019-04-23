<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/journal/bootstrap.min.css" rel="stylesheet" integrity="sha384-ciphE0NCAlD2/N6NUApXAN2dAs/vcSAOTzyE202jJx3oS8n4tAQezRgnlHqcJ59C" crossorigin="anonymous" />
      <link rel="stylesheet" href="assets/css/style.css" />
      <title>Exercice 1 Partie 7 PHP</title>
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
      <div class="list-group">
         <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active" title="list">
            <div class="d-flex w-50 justify-content-between">
               <h1 class="mb-1 text-center">Exercice 1 Partie 7 PHP</h1>
            </div>
            <form class="form" action="users.php" method="get">
               <input type="text" name="lastname" id="lastname" placeholder="Nom" required />
               <input type="text" name="firstname" id="firstname" placeholder="Prénom" required />
                  <input type="submit" value="Valider" name="valid" />
            </form>
         </a>
      </div>
   </body>
</html>
