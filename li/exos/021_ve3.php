<?php

$methode[3] = 'Méthode <strong>Dico [N, lastIndex]</strong>';

function ve3 ($A1 = 0, $N = 7) {
    return [];
  };

function affE()
{
  global $e, $i, $v;
  echo $i.' / <strong>'.$v.'</strong>';
  vdli($e);
  echo '<hr>';
}

// Init
// echo '0 / <strong>'.$A1.'</strong><hr>';
$e = [$A1 => 0, 0 => 1];
$i = 1;
$v = 0;
/**
 * Van Eck
 * //2do Van Eck méthode Python
 * https://www.youtube.com/watch?v=Cd5Nmyz8ISI.
 *
 * @param mixed $seq
 */
function ve2($seq) // Méthode Dictionnaire
{
  define('MAX2', 15);
  $a = array_fill(0, MAX2, 0);
  // $a[0]=7;
  $l    = count($seq);
  $seen = [];
  for ($n = 0; $n < MAX2 - 1; ++$n) {
    if ($seq[$n] === $seq[$n - 1]) {
      $next = $l - $n - 1;
    }
    $seen[$a[$n]] = $n;
  }

  return $seq;
}
/*
func main() {
  const max = 1000
  a := make([]int, max) // all zero by default
  seen := make(map[int]int)
  for n := 0; n < max-1; n++ {
  if m, ok := seen[a[n]]; ok {
  a[n+1] = n - m
  }
  seen[a[n]] = n
  }
  fmt.Println("The first ten terms of the Van Eck sequence are:")
  fmt.Println(a[:10])
  fmt.Println("\nTerms 991 to 1000 of the sequence are:")
  fmt.Println(a[990:])
}
*/

$seq = [0];

// for ($i = 0; $i < 11; ++$i) {
  // ve2($seq);
// }

// vdli($seq);