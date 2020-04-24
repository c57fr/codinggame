<!-- Affichage hiérarchie simple -->
<?php

$rens = function ($u) {
  // vdli($u);
  return 
  '<tr><td style="padding-right: 10px;">'.
    (($u[6]) ? str_repeat('&nbsp;', ($u[7] * 6)).' └─ ' : str_repeat('&nbsp;', 7)).
    $u[6].' <strong>'.$u[0].'</strong> <td style="padding-left: 10px; padding-right: 10px;">'.$u[2].' </td><td style="padding-left: 10px; padding-right: 10px;"> P '.$u[7].'</td>';
};

echo '<table border=0><tr>';
for ($i = 0; $i < $n; ++$i) {
echo '<tr>'.$rens($ms[$i]).'</tr>';
}
echo '</table>';
// ALT + 192 & ALT + 196
