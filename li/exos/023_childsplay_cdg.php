<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d %d", $w, $h);
fscanf(STDIN, "%d", $n);
error_log(var_export($w. ' x '.$h. ' - '. $n, true));
for ($i = 0; $i < $h; $i++)
{
    $line = stream_get_line(STDIN, 500 + 1, "\n");
    error_log(var_export($line, true));
}

exit;
// T1
// 12 6 -  0 < w <= 20, 0 < h <= 10
// 987
/*
...#........
...........#
............
............
..#O........
..........#.
*/

// => 7 1


// https://www.codingame.com/ide/puzzle/a-childs-play
//##################################################################
// Solution validée dans codding : // La meilleure de ci-dessus
