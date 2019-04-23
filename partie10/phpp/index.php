<?php
$file = 'source.xml';
$xml = simplexml_load_file($file);


$regexName = '#^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$#';
$regexMail = '#^([a-zA-Z0-9À-ÖØ-öø-ÿ\.\-\_]+)@([a-zA-Z0-9À-ÖØ-öø-ÿ\-\_\.]+)\.([a-zA-Z\.]{2,250})$#';
$regexPhoneNumber = '#^([0][1-79]){1}([ ][0-9]{2}){4}$#';
$regexCity = '#^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$#';

//On initialise un tableau d'erreurs vide
$formErrors = array();
/*
 * On vérifie si le tableau $_POST est vide
 * S'il est vide => le formulaire n'a pas été envoyé
 * S'il a au moins une ligne => le formulaire a été envoyé, on peut commencer les vérifications
 */
if (count($_POST) > 0) {

    if (!empty($_POST['your-name'])) {
        if (preg_match($regexName, $_POST['your-name'])) {
            $firstName = strip_tags($_POST['your-name']);
        } else {
            $formErrors['your-name'] = 'Merci de renseigner un nom valide';
        }
    } else {
        $formErrors['your-name'] = 'Merci de renseigner votre nom';
    }

    // mail
    if (!empty($_POST['your-email'])) {
        if (preg_match($regexMail, $_POST['your-email'])) {
            $mail = strip_tags($_POST['your-email']);
        } else {
            $formErrors['your-email'] = 'Merci de renseigner un mail valide';
        }
    } else {
        $formErrors['your-email'] = 'Merci de renseigner votre mail';
    }

    // phone
    if (!empty($_POST['your-tel-615'])) {
        if (preg_match($regexPhoneNumber, $_POST['your-tel-615'])) {
            $phoneNumber = strip_tags($_POST['your-tel-615']);
        } else {
            $formErrors['your-tel-615'] = 'Merci de renseigner un numéro de téléphone valide';
        }
    } else {
        $formErrors['your-tel-615'] = 'Merci de renseigner votre numéro de téléphone';
    }

    if (!empty($_POST['your-subject'])) {
        $superHero = strip_tags($_POST['your-subject']);
    } else {
        $formErrors['your-subject'] = 'Merci de mettre un sujet';
    }

    if (!empty($_POST['your-ville'])) {
        if (preg_match($regexCity, $_POST['your-ville'])) {
            $nationality = strip_tags($_POST['your-ville']);
        } else {
            $formErrors['your-ville'] = 'Merci de renseigner correctement votre ville';
        }
    } else {
        $formErrors['your-ville'] = 'Merci de renseigner votre ville';
    }

    if (!empty($_POST['your-message'])) {
        $superHero = strip_tags($_POST['your-message']);
    } else {
        $formErrors['your-message'] = 'Merci de mettre un message';
    }
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <title>Projet PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <a class="navbar-brand" href="/0.html">Maçonnerie Ocordo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/1.html" ><?= $xml->page[0]->menu; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/2.html" ><?= $xml->page[1]->menu; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/3.html" ><?= $xml->page[2]->menu; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/4.html" ><?= $xml->page[3]->menu; ?></a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php if (!empty($_GET['presentation'])) { ?>
            <div class="container-fluid">
                <div class="presentation">
                    <h4 class="mainTitle animated zoomInDown">Maçonnerie Ocordo</h4>
                </div>
            </div>

            <?php } elseif (!empty($_GET['home'])) {
            ?>
            <div class="container">
                <?= $xml->page[0]->content; ?>
            </div>
        <?php } elseif (!empty($_GET['who'])) { ?>
            <div class="container">
                <?= $xml->page[1]->content; ?>
            </div>
        <?php } elseif (!empty($_GET['feedback'])) { ?>
            <div class="container">
                <?= $xml->page[2]->content; ?>
            </div>
        <?php } elseif (!empty($_GET['contact'])) { ?>
            <div class="container">
                <?= $xml->page[3]->content; ?>



            <?php
            if (count($_POST) > 0 && count($formErrors) > 0) {

                if (isset($formErrors['your-name'])) {
                    ?>
                    <div class="formError"><?= $formErrors['your-name'] ?></div>
                    <?php
                }
            }

            if (isset($formErrors['your-email'])) {
                ?>
                <div class="formError"><?= $formErrors['your-email'] ?></div>
                <?php
            }

            if (isset($formErrors['your-tel-615'])) {
                ?>
                <div class="formError"><?= $formErrors['your-tel-615'] ?></div>
                <?php
            }

            if (isset($formErrors['your-subject'])) {
                ?>
                <div class="formError"><?= $formErrors['your-subject'] ?></div>
                <?php
            }

            if (isset($formErrors['your-ville'])) {
                ?>
                <div class="formError"><?= $formErrors['your-ville'] ?></div>
                <?php
            }

            if (isset($formErrors['your-message'])) {
                ?>
                <div class="formError"><?= $formErrors['your-message'] ?></div>
                <?php
            }
            if (count($_POST) > 0 && count($formErrors) == 0) {
                ?>
                <div>
                    <p class="formSuccess">Votre demande de devis a bien été envoyée.</p>
                </div>
            <?php } ?>
     </div>
        <?php }
        ?>
        <footer>
            <div class="footerSocialIcons text-center">
                <ul>
                    <li><a href="#" target="blank" title="Suivez-nous sur facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="blank" title="Suivez-nous sur Twitter"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="footerMenu text-center">
                <ul>
                    <li><a href="#" target="blank" title="Contactez-nous">Contactez-nous</a></li>
                    <li><a href="#" target="blank" title="Mentions Légales">Mentions Légales</a></li>
                    <li><a href="#" target="blank" title="Mon compte">Mon compte</a></li>
                </ul>
            </div>
            <div class="footerCopyright">
                <p>© 2019 Copyright : <a href="#" title="Maçonnerie Ocordo">Maçonnerie Ocordo</a></p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/lib/jquery.mask.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
