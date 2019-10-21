<?php

function build (int $height, string $char) : array {

  if ($height < 1) return [];

  $leaves = str_repeat ($char, 2 * ($height - 1) + 1);
  $tree = [];

  for ($level = 1; $level <= $height; $level += 1) {

    $tree [] = $leaves;
    $leaves = ($spaces = str_repeat (' ', $level))
      . str_repeat ($char, 2 * ($height - $level - ($level < $height)) + 1)
      . $spaces;
  }

  return array_reverse ($tree);
}
