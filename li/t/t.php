<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu xdebug ds chrome

$str = 'Lionel@l777';

$n = count_chars($str, 1);

// 2do Utiliser cette fonction à la place du regex pour même résultat que exo 18 - Mo
foreach ($n as $k => $v) {
    echo $k.' '.chr($k).' : '.$v.'<br>';
  
  
}



vdli (preg_match('/[A-Z a-z 0-9]/', $str) );
// vdli($n);