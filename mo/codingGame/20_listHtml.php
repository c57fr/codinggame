<?php
function listHTML(string $titre, array $capital){
    //$titre = '';
    if(is_null($titre) && empty($titre))
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
                echo "<li>";
                    echo $capitale;
                echo "<li/>";
            }
        echo "</ul>";
    }
    return null;
}
var_dump(listHTML($titre = "SENEGAL", $capital=["moi", "toi", "lui"]));