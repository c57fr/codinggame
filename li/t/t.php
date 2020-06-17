<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xdebug ds chrome


// echo microtime(true);

// include './pieces.php';
exit;
include './bin.php';
include './fiboRecursifEtDyn.php';


// include 'nonogram.php'; // 2do À dev nonogram solver en HTML56/CSS/Bootstrap/JS

$str = 'Lionel456ok';

$n = count_chars($str, 1);

// 2do Utiliser cette fonction à la place du regex pour même résultat que exo 18 - Mo
foreach ($n as $k => $v) {
  echo $k.' '.chr($k).' : '.$v.'<br>';
}

vdli(preg_match('/[A-Z a-z 0-9]/', $str));
// vdli($n);

//2do Vérif ds doc c57.fr si ext VSC Path autocomplete indiquée comme recommandée' .