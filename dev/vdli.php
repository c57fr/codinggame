<?php

function affMij($m)
{
  $N  = count($m);
  $ch = '<table>';
  for ($i = 0; $i < $N; ++$i) {
    $ch .= '<tr>';
    for ($j = 0; $j < $N; ++$j) {
      $ch .= '<td>'.$m[$i][$j].'</td>';
    }
    $ch .= '</tr>';
  }
  echo $ch.'</table><br>';
}

function affMM($mm)
{
  $N  = count($mm);
  $ch = '<table>';

  foreach ($mm as $k=>$m) {
    $ch .= '<tr>';
    $ch .= '<td style = "text-align:right">'.$k.'</td><td style = "text-align:right">[ '.$m[0].'</td><td>, </td><td style = "text-align:right">'.$m[1].' ]</td>';
  }
  /*
  for ($i = 0; $i < $N; ++$i) {
    for ($j = 0; $j < $N; ++$j) {
    }
  }
  */
  $ch .= '</tr>';
  echo $ch.'</table><br>';
}

function vname()
{
  // read backtrace
  $bt = debug_backtrace(0)[1];

  // var_dump($bt);
  // read file
  $file = file($bt['file']);
  // select exact print_var_name($varname) line
  $src = $file[$bt['line'] - 1];
  // search pattern
  $pat = '#(.*)'.__FUNCTION__.' *?\( *?(.*) *?\)(.*)#i';
  // extract $varname from match no 2
  $var = preg_replace($pat, '$2', $src);
  // return var name
  return str_replace(');', '</strong>', str_replace(['vdt(', 'vdli('], '<strong>', trim($var))).' (Ligne '.$bt['line'].'): ';
}

function vdli($v)
{
  $str = '<pre>'.vname($v);
  $str .= print_r($v, true).'</pre>';
  echo $str;
}

/**
 * var_dump d'un arr.
 */
function vdt(array $tab)
{
  // echo '<pre>'.vname($tab).')';
  echo '<pre>';
  echo vname($tab);
  echo var_dump($tab, true);
  echo '</pre>';
}
