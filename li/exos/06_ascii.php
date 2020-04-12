Exo 06: ASCII.<hr>

<?php

// https://www.codingame.com/ide/puzzle/mars-lander-episode-1
$l=4;
$h=5;
$rows = array (
    0 => ' #  ##   ## ##  ### ###  ## # # ###  ## # # #   # # ###  #  ##   #  ##   ## ### # # # # # # # # # # ### ### ',
    1 => '# # # # #   # # #   #   #   # #  #    # # # #   ### # # # # # # # # # # #    #  # # # # # # # # # #   #   # ',
    2 => '### ##  #   # # ##  ##  # # ###  #    # ##  #   ### # # # # ##  # # ##   #   #  # # # # ###  #   #   #   ## ',
    3 => '# # # # #   # # #   #   # # # #  #  # # # # #   # # # # # # #    ## # #   #  #  # # # # ### # #  #  #       ',
    4 => '# # ##   ## ##  ### #    ## # # ###  #  # # ### # # # #  #  #     # # # ##   #  ###  #  # # # #  #  ###  #  ',
);

vdli($rows);

$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ?";
$t='E';

for($i=0; $i<$h; $i++){
    $word = "";
    foreach(str_split($t) as $let){
        // vdli($t);
        $index = strpos( $string, strtoupper($let));
        //vdli($index);
        if($index===false){
            $index = strpos($string, strtoupper("?"));
        }
        $word .= substr($rows[$i], ($index) * $l, $l).'<br>';
        // vdli($i);
        // vdli($l);
    }
    echo $word.PHP_EOL;
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