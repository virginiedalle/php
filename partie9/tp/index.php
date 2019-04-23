<?php
//On créé un tableau pour permettre l'affichage des options. On passe par un tableau pour garder le mois selectionné.
$months = array(
  1 => 'Janvier',
  2 => 'Février',
  3 => 'Mars',
  4 => 'Avril',
  5 => 'Mai',
  6 => 'Juin',
  7 => 'Juillet',
  8 => 'Août',
  9 => 'Septembre',
  10 => 'Octobre',
  11 => 'Novembre',
  12 => 'Décembre'
);

//Numéro du mois selectionné dans la liste déroulante. 
//Si le formulaire n'a pas été envoyé (première visite sur la page) on stocke dans $monthSelected le numéro du mois actuel.
$monthSelected = (isset($_POST['month']) ? $_POST['month'] : date('m',time()));
/*
 * Numéro de l'année sélectionnée dans la liste déroulante.
 * Si le formulaire n'a pas été envoyé (première visite sur la page) on stocke dans $yearSelected le numéro de l'année actuelle.
 */
$yearSelected = (isset($_POST['year']) ? $_POST['year'] : date('Y',time()));
// Nombre de jours dans le mois. Exemple : Pour Janvier, 31.
$numberDayInMonth = cal_days_in_month(CAL_GREGORIAN, $monthSelected, $yearSelected);
/*
 * Le jour de la semaine du premier jour du mois. (Lundi = 1, Mardi = 2 ...)
 * Exemple : Janvier 2019 commence un mardi $firstWeekDayOfMonth = 2 car mardi est le deuxième jour de la semaine.
 */
$firstWeekDayOfMonth = date('N',mktime(0,0,0,$monthSelected,1,$yearSelected));
/*
 * Le jour de la semaine du dernier jour du mois. (Lundi = 1, Mardi = 2 ...)
 * Exemple : Janvier 2019 finit un jeudi $lastWeekDayOfMonth = 4 car jeudi est le quatrième jour de la semaine.
 */
$lastWeekDayOfMonth = date('N',mktime(0,0,0,$monthSelected,$numberDayInMonth,$yearSelected));
/*
 * Nombre total de cases à afficher dans le calendrier. Exemple : pour janvier 2019 => 35
 * On calcule ce nombre comme suit :
 * Le nombre total de jour dans le mois + le nombre de case à passer avant le mois (premier jour de la semaine - 1) + (7 - dernier jour de la semaine)
 * Exemple : janvier 2019 => a 31 jours, commence un mardi (deuxième jour de la semaine) => 2 - 1 parce que le mardi est déja compté avec le nombre total de jour + 7 (nombre de jours dans la semaine) - numero du dernier jour de la semaine => 4 car finit un Jeudi
 * 31 + (2 - 1) + (7 - 4) => 31 + 1 + 3 => 35 
 */
$numberOfTd = $numberDayInMonth + ($firstWeekDayOfMonth - 1) + (7 - $lastWeekDayOfMonth);
//Variable qui va servir à l'affichage du numéro du jour.
$currentDay = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <title>TP Partie 9 PHP</title>
   </head>
   <body>
      <form action="index.php" method="POST">
         <select name="month">
          <?php
          foreach($months as $monthNumber=>$month) {
            ?>
            <option value="<?= $monthNumber ?>" <?= $monthSelected == $monthNumber ? 'selected' : '' ?>><?= $month ?></option>
            <?php } ?>
          </select>
         <select name="year">
            <?php for($year = 2019; $year >= 1970; $year--){?>
            <option value="<?= $year ?>" <?= $yearSelected == $year ? 'selected' : '' ?>><?= $year ?></option>
            <?php } ?>
         </select>
         <input type="submit" value="Valider" />
      </form>
      <table>
         <thead>
            <tr>
               <th>Lundi</th>
               <th>Mardi</th>
               <th>Mercredi</th>
               <th>Jeudi</th>
               <th>Vendredi</th>
               <th>Samedi</th>
               <th>Dimanche</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <?php
               //On créé toutes les cases nécessaires
               for ($td = 1; $td <= $numberOfTd; $td++) {
              /* Janvier commence un mardi, le 2ème jour de la semaine $firstWeekDayOfMonth est donc égal à 2
              * Les 7 premières $td seront affichées sous les jours de la semaine
              * Exemple : si $td = 1 -> la boucle créera une case sous lundi, si $td = 2 -> la boucle créera une case sous mardi
              * On va donc vérifier le contenu de $td : s'il est plus grand ou égal à 2 on affiche le numéro des jours
              * => A partir de la deuxième case, on commence à afficher les jours de janvier
              * => Cela permet de passer le lundi, qui n'est pas en janvier
              * On vérifie également que la variable permettant d'afficher les jours est inférieure ou égale au nombre de jour dans le mois
              * Dès qu'on a affiché le 31 ème jour (pour janvier), on ne veut plus afficher de jour le mois est terminé
              */
                  if ($td >= $firstWeekDayOfMonth && $currentDay <= $numberDayInMonth) {
                     ?>
                     <td><?= $currentDay ?></td>
                  <?php 
                  $currentDay++;
                  //Sinon on affiche des cases vides.
                  } else {
                     ?>
                     <td>o</td>
                     <?php
                  }
                  //A chaque fois que l'on a créé 7 cases, on passe à la ligne.
                  if ($td % 7 == 0) {
                     ?>
                  </tr><tr>
                     <?php
                  }
                  
               }
               ?>
            </tr>
         </tbody>
      </table>
   </body>
</html>
