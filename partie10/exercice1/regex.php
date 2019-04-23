<?php
// \w équivaut à a-zA-Z0-9_
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
$regexSiret ='#[0-9]{14}#';
$regexCountry = '#^[A-Za-zÀ-ÖØ-öø-ÿ]+([- ]{0,1}[A-Za-zÀ-ÖØ-öø-ÿ]+){0,1}$#';
$regexAdress = '#[0-9A-Za-zÀ-ÖØ-öø-ÿ-\s]+#'
$regexPoleEmploi = '#[0-9]{7}[A-Z]{1}#';
$regexUrlCodecademy = '#https:\/\/www.codecademy.com\/{1}[a-z0-9]+#';
$regexGender = '#Mr|Mme{1}#';
?>
