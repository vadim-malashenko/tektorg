function isBracketsBalanced (string $input) : bool {

  $brackets = str_split ($input);
  $costs = [
    '[' => 1,
    '(' => 10,
    '{' => 100,
    ']' => -1,
    ')' => -10,
    '}' => -100
  ];

  $opened = [- $costs [end ($brackets)]];
  $balance = 0;

  while (($bracket = array_pop ($brackets)) !== NULL) {

    $cost = $costs [$bracket];
    $balance += $cost;

    if ($cost < 0)
    
      $opened [] = - $cost;
      
    else if ($cost == end ($opened))
    
      array_pop ($opened);

    else
    
      return FALSE;
  }

  return $balance == 0;
}
