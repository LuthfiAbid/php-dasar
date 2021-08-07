<?php
function cari($arr, $str)
{
  $str = str_split($str);
  $result = array();
  foreach ($arr as $key => $values) {
    if (is_array($values)) {
      $result = array_merge($result, $values);
    }
    if (!array_diff($str, $result)) return true;
  }
  return false;
}

$arr = [
  ['f', 'g', 'h', 'i'],
  ['j', 'k', 'p', 'q'],
  ['r', 's', 't', 'u']
];

echo cari($arr, 'fjrstp') ? 'true' : 'false';
