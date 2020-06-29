<?php

if (getenv('local')) {
  echo '028 - Expressions parenthésées.<hr>';

  // Reconstitution T1

  // Reconstitution T2

  // Reconstitution T3

}
// https://www.codingame.com/ide/puzzle/brackets-extreme-edition
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans codding :
else {
  
  fscanf(STDIN, "%s", $expression);
  
  // Write an answer using echo(). DON'T FORGET THE TRAILING \n
  // To debug: error_log(var_export($var, true)); (equivalent to var_dump)
  
  echo("true\n");
  
}
