<?php

if ('127.0.0.1' === ($_SERVER['REMOTE_ADDR'] ?? 0)) {
  function getTps($R, $V)
  {
    vdli($V);
    $r = array_fill(0, $R, 0);
    foreach ($V as $v) {
      list($C, $N) = [substr($v, 0, 1), substr($v, 2, 1)];
      $r[array_search(min($r), $r, true)] += 5 ** ($C - $N) * (10 ** $N);
    }
    vdli($r);


    
    
    // for(;$a;sort($r))$r[0]+=array_shift($z);
    /*
    $a = array_reverse($a);
    while ($a) {
      //   vdli($a);
      sort($r);
      //   vdli($r);
      $r[0] += array_pop($a);
      vdli($r);
    }
    */
    return nf(max($r));
  }

  // Reconstitution T1
  $R = 1;
  $V = ['3 1'];
  echo getTps($R, $V).'<hr>';
  // Reconstitution T2
  $R = 4;
  $V = ['3 2', '4 1', '7 6', '7 1'];
  echo getTps($R, $V);
// Reconstitution T3
}
// https://www.codingame.com/training/easy/bank-robbers
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans codding :

/*

A gang of R foolish robbers decides to heist a bank. In the bank there are V vaults (indexed from 0 to V - 1). The robbers have managed to extract some information from the bank's director:
- The combination of a vault is composed of C characters (digits/vowels).
- The first N characters consist of digits from 0 to 9.
- The remaining characters consist of vowels (A, E, I, O, U).
- C and N may be the same or different for different vaults.

All the robbers work at the same time. A robber can work on one vault at a time, and a vault can be worked on by only one robber. Robbers deal with the different vaults in increasing order.

A robber tries the combinations at the speed of 1 combination per second. He tries all the possible combinations, i.e. he continues to try the untried combinations even after he has found the correct combination. Once he finishes one vault, he moves on to the next available vault, that is the vault with the smallest index among all the vaults that have not been worked on yet. The heist is finished when the robbers have worked on all the vaults.

Assume it takes no time to move from one vault to another.

You have to output the total time the heist takes.
Entrée
Line 1: An integer R for the number of robbers.
Line 2: An integer V for the number of vaults.
Next V lines: For each vault, one line of two space-separated integers C and N for the total number of characters (C) and the total number of digits (N) in the vault's combination. The vaults are ordered by their index.
Sortie
Line 1: An integer for the total time the heist takes in seconds.
Contraintes
1 ≤ R ≤ 5
1 ≤ V ≤ 20
3 ≤ C ≤ 8
0 ≤ N ≤ C
*/

else {
    $r=`head -n1`;$v=`head -n1`;
    for(;fscanf(STDIN,"%d%d",$c,$n);)$z[]=10**$n*5**($c-$n);
    for(;++$k<$r;)$o[$k]=0;     
    for(;$z;sort($o))$o[0]+=array_shift($z);
    echo max($o);

    /*
  fscanf(STDIN, '%d', $R);
  $r = array_fill(0, $R, 0);
  fscanf(STDIN, '%d', $V);
//   error_log(var_export($R.' '.$V, true));

  for ($i = 0; $i < $V; ++$i) {
    fscanf(STDIN, '%d %d', $C, $N);
    $r[array_search(min($r), $r, true)] += 5 ** ($C - $N) * (10 ** $N);
  }

  echo max($r)."\n";

  */
}
