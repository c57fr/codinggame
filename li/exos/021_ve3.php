<?php

$methode[3] = 'Dico [N, lastIndex]';
// 2do Penser Arrays

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
 * Env 5'20 dans
 * https://www.youtube.com/watch?v=Cd5Nmyz8ISI.
 *
 * @param mixed $seq
 * @param mixed $A1
 * @param mixed $N
 */
function ve3($A1 = 0, $N = 7) // Méthode Dictionnaire
{
  $a = [$A1, 0]; // [N, lastIndex]
  array_push($a, '123 b');

  return $a;
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

// Bilan:
// ++ : Idem ve1
// -- : Idem ve1
// ==>: Env. % + rapide que ve2, mais gourmande si $N élevé

// https://www.codingame.com/training/easy/van-ecks-sequence

//##################################################################
/*

Solution dans codding :

<?php

...

// => Pass  des Tests

*/
