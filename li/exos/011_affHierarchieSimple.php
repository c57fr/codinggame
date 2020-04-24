<!-- Affichage hiérarchie simple -->
<?php

$rens=function($u){
  // vdli($u);
return ($u[7].' '.$u[0] . ' ('.$u[2].' - P '.$u[6].' )');
};


for ($i = 0; $i < $n; ++$i) {
  echo   (($i) ? str_repeat('&nbsp;', ($ms[$i][6] * 5)).' └─ ':'').$rens($ms[$i]).'<br>';
}
// ALT + 192 & ALT + 196