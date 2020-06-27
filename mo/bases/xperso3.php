<?php

$email = $_POST['email'];
$point = strpos($email, '.');
$aero  = strpos($email, '@');
$gmail = strpos($email, 'gmail');
$com   = strpos($email, 'com');

if ('' === $point) {
  echo 'Votre email doit comporter un <b>point</b>';
  exit();
}
if ('' === $aero) {
  echo 'Votre adresse email doit comporter un <b>@</b>';
  exit();
}
if ('' === $gmail) {
  echo 'Votre adresse email doit comporter <b>gmail</b>';
  exit();
}
if ('' === $com) {
  echo 'Votre adresse email doit comporter <b>com</b>';
  exit();
}
    echo "Votre adresse email est : '<a href = \"mailto:"."${email}"."\"><b>${email}</b></a>'";
