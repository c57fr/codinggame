<?php

if (!function_exists('vdli')) {
  include '../../dev/vdli.php';
}
ob_implicit_flush(); // Pour actu x.debug ds chrome

$exemple = 2; // 1 to ...

if (2 === $exemple) {
  function getFibonacci()
  {
    $i = 0;
    $k = 1; //first fibonacci value
    yield $k;
    while (true) {
      $k = $i + $k;
      $i = $k - $i;
      yield $k;
    }
  }

  $y = 0;

  foreach (getFibonacci() as $fibonacci) {
    echo $fibonacci."\n";
    ++$y;
    if ($y > 5) {
      break; // infinite loop prevent
    }
  }
}

if (1 === $exemple) {
  $input = <<<'EOF'
    1;PHP;Likes dollar signs
    2;Python;Likes whitespace
    3;Ruby;Likes blocks
EOF;

  function input_parser($input)
  {
    foreach (explode("\n", $input) as $line) {
      $fields = explode(';', $line);
      $id     = array_shift($fields);

      yield $id => $fields;
    }
  }

  foreach (input_parser($input) as $id => $fields) {
    echo "${id}:\n<br>";
    echo "    {$fields[0]}\n<br>";
    echo "    {$fields[1]}\n<hr>";
  }
}
