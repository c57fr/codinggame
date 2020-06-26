<?php
$email = $_POST['email'];
$point = strpos($email, ".");
$aeroba = strpos($email, "@");

if($point == '')
{
    echo "Votre email doit comporter un <b>point</b>";
}elseif($aeroba = '')
{
    echo "Votre email doit comporter un <b>@</b>";
}else
{
    echo "Votre email est: '<a href=\"mailto\:"."$email\"><b>$email</b></a>'";
}