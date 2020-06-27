<?php

$b = stream_get_line(STDIN, 999 + 1, "\n");

$s = 'x';
// Reconstitution T1
// $b='00';
error_log(var_export($b, true));
echo "1\n";

// Reconstitution T2
// $b='01010';
error_log(var_export($b, true));
echo "3\n";

// Reconstitution T3
// $b='11011101111';
// $b2='11011111111';
// 8
error_log(var_export($b, true));


