<?php

$a = [1, 2, 3];
vdli($a);
echo (array_pop($a));
vdli($a);
echo end($a);
// vdli(end(array_slice($a, 0, -1)));
