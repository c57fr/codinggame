<?php

function listHTML($titre, $capital)
{

  return (empty($titre) || empty($capital)) ? null : '<h3>'.$titre.'</h3><ul><li>'.implode('</li><li>', $capital).'</li></ul>';
}

/*function listHTML(string $titre, array $capital){
    //$titre = '';
    if(empty($titre) || empty($capital))
    {
        return null;
    }
        return '<h3>'.$titre.'<h3/><ul><li>'.implode('</li><li>',$capital).'</li></ul>';
        //return '<h3>'.$str.'</h3><ul><li>'.implode('</li><li>', $arr).'</li></ul>';

        /*echo "<h3>$titre<h3/>";
        $capital = implode($titre, "," , array $capital);
        return "<ul>";
            foreach($capital as $capitale)
            {
                return "<li>".$capitale."<li/>";
            }
        return "</ul>";*/

$capital = array_reverse(array_map(function($v){return ucfirst($v);
}
,['moi', 'toi', 'lui']));
// Vu ta liste... Les autres en premier, c'est + poli ;-)...
// Et une majuscule, en début de phrase ! ;-)

echo listHTML($titre = 'SENEGAL', $capital);

// https://www.codingame.com/playgrounds/32339/exercices-de-php-pour-debutant

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
