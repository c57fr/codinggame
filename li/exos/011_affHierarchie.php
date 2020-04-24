<!-- Affichage hiérarchie simple -->
<?php

$rens=function($u){
return ($u[6].' '.$u[0] . ' ('.$u['bg'].'-'.$u['bd'].' | '.$u['prof'].' )');
};

foreach ($ms as $k => $v) {
  echo str_repeat('&nbsp;', ($ms[$k]['prof'] * 5)).' └─ '.$rens($v).'<br>';
}
// ALT + 192 & ALT + 196