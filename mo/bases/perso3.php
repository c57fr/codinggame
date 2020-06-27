<?php
$email = $_POST['email'];
$point = strpos($email, ".");
$aero = strpos($email, "@");
$gmail = strpos($email, "gmail");
$com = strpos($email, "com");

if($point == '')
{
   echo "Votre email doit comporter <b>point</b>";
   exit();
}elseif($aero == '')
{
    echo "Votre adresse email doit comporter <b>@</b>";
    exit();
}elseif($gmail == '')
{
    echo "Votre adresse email doit comporter <b>gmail</b>";
    exit();
}elseif($com == '')
{
    echo "Votre adresse email doit comporter <b>com</b>";
    exit();
}else{
    echo "Votre adresse email est : '<a href = \"mailto:"."$email"."\"><b>$email</b></a>'";
}