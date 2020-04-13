<?php

      include '../../dev/vdli.php'; // vdli()

$classes = [
  'CM2' => [
    'nom'    => 'Momo',
    'prenom' => 'SECK',
    'notes'  => [
      'SVT'      => 18,
      'Math'     => 15,
      'Histoire' => 17,
    ],
  ],
  [
    'nom'    => 'COTE',
    'prenom' => 'Lio',
    'notes'  => [
      'SVT'      => 20,
      'Math'     => 19,
      'Histoire' => 16,
    ],
  ],
  'CM1' => [
    'nom'    => 'Malick',
    'prenom' => 'Diallo',
    'notes'  => [
      'SVT'      => 13,
      'Math'     => 15,
      'Histoire' => 14,
    ],
  ],
];

foreach ($classes as $eleve) {
//   vdli($eleve);
  foreach ($eleve as $info => $v) {
    if ('notes' === $info) {
      echo '<br><u>Notes:</u><br>';
      foreach ($v as $matiere => $note) {
        echo $matiere.' : '.$note.'<br>';
      }
      echo '<hr>';
    } else {
      echo $v.' ';
    }
  }
}
