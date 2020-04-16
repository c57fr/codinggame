Exo 007: Mime Type.<hr>

<?php

// https://www.codingame.com/training/easy/mime-type

$N   = 3; // Number of elements which make up the association table
$Q   = 3; // Number Q of file names to be analyzed.
$EXT = [
  'html',
  'png',
  'gif',
];
vdli($EXT);

$MT = [
  'text/html',
  'image/png',
  'image/gif',
];
$FNAME = [
  'animated.gif',
  'portrait.png',
  'index.html',
];
vdli($FNAME);

$table = array_combine($EXT, $MT);
// vdli($table);

for ($i = 0; $i < $Q; $i++)
{    $ext = pathinfo($FNAME[$i], PATHINFO_EXTENSION);
  // echo $v.': '.(($ext)?$table[$ext]:0).'<br>';
  echo (in_array($ext, $EXT)?$table[$ext]:'UNKNOWN')."\n".'<br>';
}

//////////////////////////////////////////////////////////////

/*
Solution dans codding : Mêmes codes sauf $MESSAGE = 'CC';

<?php

<?php

// $N: Number of elements which make up the association table.
fscanf(STDIN, "%d", $N);
error_log(var_export($N, true));
// $Q: Number Q of file names to be analyzed.
fscanf(STDIN, "%d", $Q);
error_log(var_export($Q, true));

$exts=[];
$mts=[];
for ($i = 0; $i < $N; $i++)
{
    // $EXT: file extension
    // $MT: MIME type.
    fscanf(STDIN, "%s %s", $EXT, $MT);
    $exts[]=strtolower($EXT);
    $mts[] =$MT;
    
    error_log(var_export($EXT, true));
    error_log(var_export($MT, true));
}
// for ($i = 0; $i < $Q; $i++)
// {
//     $FNAME = stream_get_line(STDIN, 256 + 1, "\n");// One file name per line.
// error_log(var_export($FNAME, true));
// }
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)


// For each of the Q filenames, display on a line the corresponding MIME type. If there is no corresponding type, then display UNKNOWN.
$table = array_combine($exts, $mts);
// vdli($table);
error_log(var_export($table, true));

// foreach ($FNAME as $v) {
//   $ext = pathinfo($v, PATHINFO_EXTENSION);
//   // echo $v.': '.(($ext)?$table[$ext]:0).'<br>';
//   echo (($ext)?$table[$ext]:0)."\n";
// }

// error_log(var_export(pathinfo($FNAME, PATHINFO_EXTENSION), true));

for ($i = 0; $i < $Q; $i++)
{    $FNAME = strtolower(stream_get_line(STDIN, 256 + 1, "\n"));// One file name per line.
error_log(var_export('ok : '.$FNAME, true));
    $ext = pathinfo($FNAME, PATHINFO_EXTENSION);
  // echo $v.': '.(($ext)?$table[$ext]:0).'<br>';
  echo (in_array($ext, $exts)?$table[$ext]:'UNKNOWN')."\n";
}

?>


*/
