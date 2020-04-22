Exo 006: ASCII.<hr>

<?php
if (!function_exists('vdli')) include '../../dev/vdli.php';


// https://www.codingame.com/training/easy/ascii-art/solution

$l    = 4;
$h    = 5;
$rows = [
  0 => ' #  ##   ## ##  ### ###  ## # # ###  ## # # #   # # ###  #  ##   #  ##   ## ### # # # # # # # # # # ### ### ',
  1 => '# # # # #   # # #   #   #   # #  #    # # # #   ### # # # # # # # # # # #    #  # # # # # # # # # #   #   # ',
  2 => '### ##  #   # # ##  ##  # # ###  #    # ##  #   ### # # # # ##  # # ##   #   #  # # # # ###  #   #   #   ## ',
  3 => '# # # # #   # # #   #   # # # #  #  # # # # #   # # # # # # #    ## # #   #  #  # # # # ### # #  #  #       ',
  4 => '# # ##   ## ##  ### #    ## # # ###  #  # # ### # # # #  #  #     # # # ##   #  ###  #  # # # #  #  ###  #  ',
];

vdli($rows);

$string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ?';
$t      = 'E';

for ($i = 0; $i < $h; ++$i) {
  $word = '';
  foreach (str_split($t) as $let) {
    // vdli($t);
    $index = strpos($string, strtoupper($let));
    //vdli($index);
    if (false === $index) {
      $index = strpos($string, strtoupper('?'));
    }
    $word .= substr($rows[$i], ($index) * $l, $l).'<br>';
    // vdli($i);
        // vdli($l);
  }
  echo $word.PHP_EOL;
}
echo '<hr>2ème façon + rapide<br><br>';

// vdli($rows);
for ($i = 0; $i < $h; ++$i) {
  foreach (str_split($t) as $let) {
    // vdli($t);
    // vdli(ord($let));
    // vdli($t);

    $d = ctype_alpha($let) ? ord($let) - 65 : 26;
    echo substr($rows[$i], $d * $l, $l);
  }
  echo "<br>\n";
}

//////////////////////////////////////////////////////////////

/*
Solution dans codding :

<?php

$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ?";
fscanf(STDIN, "%d",
    $L
);
fscanf(STDIN, "%d",
    $H
);
$T = stream_get_line(STDIN, 256 + 1, "\n");
$ROW = [];
for ($i = 0; $i < $H; $i++)
{
    $ROW[] = stream_get_line(STDIN, 1024 + 1, "\n");
}
for($i=0; $i<$H; $i++){
    $word = "";
    foreach(str_split($T) as $let){
        $index = strpos( $string, strtoupper($let));
        if($index===false){
            $index = strpos($string, strtoupper("?"));
        }
        $word .= substr($ROW[$i], ($index) * $L, $L);
    }
    echo $word.PHP_EOL;
}

*/
