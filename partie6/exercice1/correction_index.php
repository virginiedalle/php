<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>phpp6e1</title>
</head>
<body>
  <p><?php
  if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
    echo 'Vraiment, ' . $_GET['firstname'] . ' ' . $_GET['lastname'] ;
  } else {
    echo 'ERROR';
  }
  ?> !</p>
</body>
</html>