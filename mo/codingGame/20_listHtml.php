<?php
function listHTML(string $titre, array $capital){
    //$titre = '';
    if(is_null($titre) && empty($titre) || empty($capital))
    {
        return null;
    }else{
        echo "<h3>$titre<h3/>";

        echo "<ul>";
            foreach($capital as $capitale)
            {
                echo "<li>".$capitale."<li/>";
            }
        echo "</ul>";
    }
    return null;
}
var_dump(listHTML($titre = "SENEGAL", $capital=["moi", "toi", "lui"]));


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