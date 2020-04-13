<?php
$eleves = [
    "CM2" => [
        "nom" => "Momo",
        "prenom" => "SECK",
        "notes" => [
            'SVT' => 18,
            'Math' => 15,
            'Histoire' => 17
        ],
        [
        'nom' => 'COTE',
        'prenom' => 'Lio',
        'notes' => [
            'SVT' => 20,
            'Math' => 19,
            'Histoire' => 16
            ]
        ]
    ],
    'CM1' => [
        "nom" => "Malick",
        "prenom" => "Diallo",
        "notes" => [
            'SVT' => 13,
            'Math' => 15,
            'Histoire' => 14
        ]
    ]
];

foreach ($eleves as $eleve => $infos) {
    echo $eleve ."<br/>";
    foreach ($infos as $k => $info) {
        print_r($info . '<br/>');
    }

}