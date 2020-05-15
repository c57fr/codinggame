<?php
function listHTML(string $titre, array $capital){
    //$titre = '';
    if(is_null($titre) && empty($titre) || empty($capital))
    {
        return null;
    }
        echo "<h3>$titre<h3/>";

        return "<ul>";
            foreach($capital as $capitale)
            {
                return "<li>".$capitale."<li/>";
            }
        return "</ul>";
    
}
var_dump(listHTML($titre = "SENEGAL", $capital=["moi", "toi", "lui"]));

https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant


/*
 if(is_null($titre) && empty($titre) || empty($capital))
    {
        return null;
    }else{
        echo "<h3>$titre<h3/>";
    }
    if(empty($capital))
    {
        return null;
    }
    else{
        echo "<ul>";
            foreach($capital as $capitale)
            {
                echo "<li>".$capitale."<li/>";
            }
        echo "</ul>";
    }
    return null;
 */