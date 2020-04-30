<?php

$dev = time();
for ($i = 1e7, $ii = $i; --$i;) {
}
$fin = time();
echo 'G compté jusqu\'à '.number_format($ii, 2, ',', ' ').' en '.($fin - $dev).' s.<hr>';

// 2fix Fibo Récursif

function fiboR($n)
{
  return ($n < 2) ? $n : fiboR($n - 1) + fibo($n - 2);
}

// 2fix Fibo Dynamique par récursivité

// 2fix Fibo Dynamique par itérationé' .