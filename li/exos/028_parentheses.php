<?php

if (getenv('local')) {
  echo '028 - Expressions parenthésées.<hr>';

  // Reconstitution T1
  $ch = '{([]){}()}';
  // $ch = '{()';
  // Reconstitution T2
  // $ch = '{([{S}]]6K[()]}';

  // T3
  // $ch = 'W12{}{}L{}';
  // Reconstitution Autre
  // $ch = 'abc]';

  vdli($ch);
  $ch = preg_replace('/[^\(^\)^\{^\}^\[^\]]/', '', $ch);
  vdli($ch);

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
}
// https://www.codingame.com/ide/puzzle/brackets-extreme-edition
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans codding :
else {
  fscanf(STDIN, '%s', $ch);
  error_log(var_export($ch, true));

  $ch = preg_replace('/[^\(^\)^\{^\}^\[^\]]/', '', $ch);

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
    // if ($i==0 && in_array($ch[$i], $pairs, true));
  }
  if (!$res || $ders) {
    $res = false;
  }

  echo(($res) ? 'true' : 'false')."\n";
}
