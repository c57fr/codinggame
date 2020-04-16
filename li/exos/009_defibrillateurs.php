Exo 009: Défibrillateurs.<hr>
<?php
https://www.codingame.com/training/easy/defibrillators

// Reconstitution des données du test 1
$LON   = '3,879483';
$LAT   = '43,608177';
$N     = 3;
$DEFIB = [
  '1;Maison de la Prevention Sante;6 rue Maguelone 340000 Montpellier;;3,87952263361082;43,6071285339217',
  '2;Hotel de Ville;1 place Georges Freche 34267 Montpellier;;3,89652239197876;43,5987299452849',
  '3;Zoo de Lunaret;50,5 avenue Agropolis 34090 Mtp;;3,87388031141133;43,6395872778854',
];
// vdli($DEFIB);

$getRad = function ($v) {
  $coord = str_replace(',', '.', $v);

  return deg2rad($coord);
};
foreach ($DEFIB as $i => $defib) {
  $defibs[$i]    = explode(';', $defib);
  $defibs[$i][4] = $getRad($defibs[$i][4]);
  $defibs[$i][5] = $getRad($defibs[$i][5]);
}
$lon = $getRad($LON);
$lat = $getRad($LAT);

// vdli($defibs);
// vdli($lon);
// vdli($lat);

for ($c = count($defibs), $i = 0; $i < $c; ++$i) {
  // $x    = (($lon - $defibs[$i][4]) * cos(($defibs[$i][5] + $lat) / 2));
  // $y    = $lat - $defibs[$i][5];
  // $d    = sqrt(($x * $x) + ($y * $y)) * 6371;
  $d    = sqrt(pow($defibs[$i][4] - $lon, 2) + pow($defibs[$i][5] - $lat, 2));
  $ds[] = $d;
  // echo $defibs[$i][1].' : '.number_format(($d*1e3), 0, ',', ' ').' mètre'.(($d*1e3>2)?'s':'').'<br>';
}

echo $defibs[array_search(min($ds), $ds, true)][1]."\n";

/*
$re  = '/[^.]([0-9]*\,[0-9]+)\;([0-9]*\,[0-9]+)+$/m';
$str = '1;Maison de la Prevention Sante;6,8 rue Maguelone 340000 Montpellier;;3,87952263361082;43,6071285339217';

$ds = [];
for ($i = 0; $i < $N; ++$i) {
  preg_match_all($re, $DEFIB[$i], $matches, PREG_SET_ORDER, 0);
  $subject  = [$matches[0][1], $matches[0][2]];
  $posdefib = preg_replace('/,/', '.', $subject);
  foreach ($posdefib as $k => $d) {
    $posdefib[$k] = deg2rad($d);
  }
  $vlon = $posdefib[0];
  $vlat = $posdefib[1];
  // vdli($matches);
  // vdli($posdefib);
  vdli($vlon);
  vdli($vlat);
  $x    = (($lon - $vlon) * cos(($vlat + $lat) / 2));
  $y    = $lat - $vlat;
  $ds[] = sqrt(($x * $x) + ($y * $y)) * 6371;

  echo '<hr>';
}
echo $DEFIB[array_search(min($ds), $ds, true)][2];
*/

// vdli(preg_replace('/,/', '.', $subject));
// echo($ch).'<br><br>';
// vdli($out); // Coordonnées du défib
// echo ($ch).'<br><br>';

//////////////////////////////////////////////////////////////
/*
Solution dans codding :

<?php

fscanf(STDIN, "%s", $LON);
fscanf(STDIN, "%s", $LAT);
fscanf(STDIN, "%d", $N);
error_log(var_export($LON, true));
error_log(var_export($LAT, true));
error_log(var_export($N, true));
$defibs=[];
for ($i = 0; $i < $N; $i++)
{
    $DEFIB[] = stream_get_line(STDIN, 256 + 1, "\n");
    error_log(var_export($i.' : '.join($DEFIB), true));
}
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

$getRad = function ($v) {
  $coord = str_replace(',', '.', $v);
  return deg2rad($coord);
};
foreach ($DEFIB as $i=>$defib) {
  $defibs[$i] = explode(';', $defib);
  $defibs[$i][4] = $getRad($defibs[$i][4]);
  $defibs[$i][5] = $getRad($defibs[$i][5]);
}
// error_log(var_export($defibs, true));
$lon = $getRad($LON);
$lat = $getRad($LAT);

for ($c=count($defibs), $i = 0; $i < $c; ++$i) {
  $x    = (($lon - $defibs[$i][4]) * cos(($defibs[$i][5] + $lat) / 2));
  $y    = $lat - $defibs[$i][5];
  $d = sqrt(($x * $x) + ($y * $y)) * 6371;
  $ds[] = $d;
 }

echo $defibs[array_search(min($ds), $ds)][1]."\n";


*/
