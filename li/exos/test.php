<?php

// echo memory_get_usage() . "<br>"; // 36640
// $a = str_repeat("Hello", 1);
// echo memory_get_usage() . "<br>"; // 57960
// unset($a);
// echo memory_get_usage() . "<br>"; // 36744

$memtot = memory_get_peak_usage();
$memdeb = memory_get_usage();
$deb    = time();
echo mf(memory_get_usage(true)).'<br>'; // 123 k
$ve[1]($A1, $N);
echo mf(memory_get_usage(true)).'<br>'; // 123 k