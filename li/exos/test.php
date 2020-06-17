<?php

$startMemory = memory_get_usage();
// $array = range(1, 100000);
$arr = implode(',',$ve[1](0, 3000));
echo mf(memory_get_usage() - $startMemory);

// echo nf(memory_get_usage()).' initial<br>'; // 57960
// $a = str_repeat("Hello", 1);
// $a = '12345123123123123123123123';
// $a = '1';
// $seq=$ve[1](0,5);
// $m_ini = memory_get_usage();
// unset($seq);
// $m_fin = memory_get_peak_usage();

// echo mf($m_fin - $m_ini);

// echo '<hr>';

// echo nf(memory_get_peak_usage()).' final<br>'; // 57960

// $N      = 1e4;
// $memdeb = memory_get_usage();
// $deb    = time();
// echo nf(memory_get_peak_usage(true)).'<br>';
// echo nf(memory_get_usage(true)).'<br>';
// $ve[1]($A1, $N);
// echo '<hr>';
// echo nf(memory_get_usage(true)).'<br>';
// echo nf(memory_get_peak_usage(true)).'<br>';