<?php
$eleves = [
    "CM2" => ['Jean', 'Marc', 'Jane', 'Marion'],
    "CM1" => ['Emilie, Marcelin']
];

foreach ($eleves as $classe=> $listEleves) {
    echo "La classe $classe : <br/>";
        foreach($listEleves as $listEleve)
        {
            echo " - $listEleve <br/>";
        }
        echo "<br/>";// ce saut de ligne permet de mettre de l'espace entre la classe CM2 et la classe CM1
}