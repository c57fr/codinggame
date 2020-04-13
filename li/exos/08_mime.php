Exo 07: Mime Type.<hr>

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

$imp = implode('|', $EXT);
foreach ($FNAME as $k => $v) {
  $ext = pathinfo($v, PATHINFO_EXTENSION);
  // echo $v.': '.(($ext)?$table[$ext]:0).'<br>';
  echo (($ext)?$table[$ext]:0)."\n".'<br>';
}

//////////////////////////////////////////////////////////////

/*
Solution dans codding : Mêmes codes sauf $MESSAGE = 'CC';

<?php




*/
