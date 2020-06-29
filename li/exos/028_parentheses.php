<?php

if (getenv('local')) {
  echo '028 - Expressions parenthésées.<hr>';

  $ch = '{([]){}()}'; // Reconstitution T1 //true
  $ch = '{([{S}]]6K[()]}';  // Reconstitution T2 //false
  // $ch = 'W12{}{}L{}';// T3 //true
  // $ch = '{()'; // false
  // $ch = 'abc]';//false
  // Reconstitution Autre

  vdli($ch);
  $e = preg_replace('/[^\(^\)^\{^\}^\[^\]]/', '', $ch);
  vdli($e);
  echo '<p style="font-size:20px; letter-spacing: 1rem;">'.$e.'</p>';

  vdli(preg_replace('/\w|\[(?R)*]|\((?R)*\)|{(?R)*}/','',$e));
  echo preg_replace('/\w|\[(?R)*]|\((?R)*\)|{(?R)*}/','',$e)?'false':'true';

  /*
  $t = [
    '[]' => '',
    '()' => '',
    '{}' => '',
  ];

  while (($e !== ($l ?? null))) {
    $l = $e;
    $e = strtr($l, $t);
  }
  echo 0 === strlen($e) ? 'true' : 'false';
  */
/*
$pairs = ['(' => ')', '[' => ']', '{' => '}'];
vdli($pairs);
echo '<p style="font-size:20px; letter-spacing: 1rem;">'.$ch.'</p>';
$ders = [];
$res  = true;

for ($l = strlen($ch),$i = -1; $res && (++$i < $l);) {
  echo $ch[$i].' - '.implode(' ', $ders).'<br>';

  if (array_key_exists($ch[$i], $pairs)) { // entrant
    $ders[] = $pairs[$ch[$i]];
    $res    = true;
  }
  if (in_array($ch[$i], $pairs, true)) {
    if ($ch[$i] === end($ders)) { // fermant
      array_pop($ders);
    } else {
      $res = false;
    }
  }
}
if (!$res || $ders) {
  $res = false;
}

echo(($res) ? 'true' : 'false')."\n";
*/
}
// https://www.codingame.com/ide/puzzle/brackets-extreme-edition
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans codding :
else {
  // fscanf(STDIN, '%s', $ch);
  // error_log(var_export($ch, true));

  // $e = preg_replace('/[^\(^\)^\{^\}^\[^\]]/', '', $ch);

  preg_replace('/\w|\[(?R)*]|\((?R)*\)|{(?R)*}/','',fgets(STDIN))?'false':'true';

  /*
  $t = [
    '[]' => '',
    '()' => '',
    '{}' => '',
  ];

  while ($e !== $l) {
    $l = $e;
    $e = strtr($l, $t);
  }

  echo 0 === strlen($e) ? 'true' : 'false';
  */

  /*
  $pairs = ['(' => ')', '[' => ']', '{' => '}'];
  $ders  = [];
  $res   = true;

  for ($l = strlen($ch),$i = -1; $res && (++$i < $l);) {
    if (array_key_exists($ch[$i], $pairs)) { // entrant
      $ders[] = $pairs[$ch[$i]];
      $res    = true;
    }
    if (in_array($ch[$i], $pairs, true)) {
      if ($ch[$i] === end($ders)) { // fermant
        array_pop($ders);
      } else {
        $res = false;
      }
    }
  }
  if (!$res || $ders) {
    $res = false;
  }

  echo(($res) ? 'true' : 'false')."\n";
  */
}
