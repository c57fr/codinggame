<?php

function capital($str)
{
  switch ($str) {
  case 'France':
    return 'Paris';

    break;
  case 'Allemagne':
    return 'Berlin';

    break;
  case 'Italie':
    return 'Rome';

    break;
  case 'Maroc':
    return 'Rabat';

    break;
  case 'Espagne':
    return 'Madrid';

    break;
  case 'Portugal':
    return 'Lisbonne';

    break;
  case 'Angleterre':
    return 'Londres';

    break;
  default:
    return 'Inconnu';

    break;
}
}
var_dump(capital('Maroc'));
