<?php

if (getenv('local')) {
  echo '029 - 1D Bush Fire.<hr>';

  $l = 10;
// echo 'Max fire: '.((int) ($l / 3)).' + ';
  // echo 'Max fire: '.(($l % 3 <=> 0)).' = ';
  // echo 'Max fire: '.((int) ($l / 3) + ($l % 3 <=> 0)).'<br>';

// Reconstitution T1 //
$line[]='.f..f';
$line[]='.......fff';
vdli($line);

$b = str_split($line[0]);
vdli($b);

for ($l=count($b)-1,$i=1; $i < $l-3; $i++) { 
  // echo ($b[$i-1]=='f') ? 'X':$b[$i];
  if ($b[$i-1]==='f'||
   ($b[$l-2]==='f' || $b[$l-1]==='f' || $b[$l]==='f')){
    vdli($i);
    $b[$i]='X';
    $b[$i-1]=$b[$i+1]=0;
    ($i<($l-3)) ? $i+=2: $i++;
  }
}
vdli($b);

}
//*** https://www.codingame.com/ide/puzzle/1d-bush-fire
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans codding :

else {
  fscanf(STDIN, '%d', $N);
  error_log(var_export($N, true));
  for ($i = 0; $i < $N; ++$i) {
    $line = stream_get_line(STDIN, 255 + 1, "\n");
    error_log(var_export($line, true));
  }
  for ($i = 0; $i < $N; ++$i) {
    // Write an answer using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    echo "answer\n";
  }
}
