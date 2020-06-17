<?php
// echo memory_get_usage() . "<br>"; // 36640
// $a = str_repeat("Hello", 1);
// echo memory_get_usage() . "<br>"; // 57960
// unset($a);
// echo memory_get_usage() . "<br>"; // 36744


$memtot = memory_get_peak_usage();
echo $memtot.'<br>';
$memdeb = memory_get_usage();
echo $memdeb.'<br>';
$deb = time();
$ve[1]($A1, $N);
$memfin = memory_get_usage();
echo $memfin.'<br>';
$memtot = memory_get_peak_usage();
echo $memtot.'<br>';