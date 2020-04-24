<!-- Affichage hiérarchie simple -->
<?php

$rens = function ($u) {
  return $u[6].' '.$u[0].' ('.$u['bg'].'-'.$u['bd'].' | '.$u[2].' - '.$u[9].' )';
};
vdli($n);
for ($i = 0; $i < $n; ++$i) {
  echo str_repeat('&nbsp;', ($ms[$i][9] * 5)).' └─ '.$rens($ms[$i]).'<br>';
}
// ALT + 192 & ALT + 196
