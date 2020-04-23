<!-- Affichage hiérarchie simple -->
<?php

foreach ($ms as $k => $v) {
  echo str_repeat('&nbsp;', ($ms[$k]['prof'] * 5)).' └─ '.$ms[$k][0].'<br>';
}
// ALT + 192 & ALT + 196