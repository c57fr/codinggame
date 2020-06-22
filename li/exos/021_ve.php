<?php

$ve['best'] = function ($An = 0, $N = 7) {
  foreach (range(1, $N - 1) as $ii) {
    $arr [] = $An;
    list($last[$An], $An) = [$ii, isset($last[$An]) ?
        $ii - $last[$An] :
        0, ];
  }

  return $arr;
};
