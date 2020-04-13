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
  // vdli($eleve);
  foreach ($eleve as $info => $v) {
    // vdli($info);
    // vdli($v);
    if ('notes' === $info) {
      foreach ($v as $matiere => $note) {
        echo 'Notes:<br>'.$matiere.' : '.$note;
      }
      echo '<hr>';
    } else {
      echo $v.' ';
    }
  }
  // foreach ($infos as $k => $info) {
    //     print_r($info . '<br/>');
    // }
}
