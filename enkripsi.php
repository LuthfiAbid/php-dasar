<?php
// DFHKNQ akan memberikan output EDKGSK
$input = 'DFHKNQ';
$key = array(
  'D' => 'E',
  'F' => 'D',
  'H' => 'K',
  'K' => 'G',
  'N' => 'S',
  'Q' => 'K'
);

$output = str_replace(array_keys($key), $key, $input);

echo $output;
