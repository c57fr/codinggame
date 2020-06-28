<?php
function Arial($size, $color, $texte)
{
    print
    ("
        <font face = Arial size=".$size." color=".$color.">".$texte."</font>
    ");
}

//ma fonction perso
function Momo($size, $color, $texte, $age)
{
    print("<font face=Verdana size=".$size." color=".$color.">".$texte.".".$age."</font>");
}