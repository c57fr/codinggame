<?php

$dev = time();
for ($i = 1e7, $ii = $i; --$i;) {
}
$fin = time();
echo 'Test Chrono: G compté jusqu\'à <strong>'.number_format($ii, 2, ',', ' ').'</strong> en '.($fin - $dev).' s !</strong>.<hr>';

// 2fix Fibo Récursif

function fiboR($n)
{
  return ($n < 2) ? $n : fiboR($n - 1) + fibo($n - 2);
}

// 2fix Fibo Dynamique par récursivité

// 2fix Fibo Dynamique par itérationé' .