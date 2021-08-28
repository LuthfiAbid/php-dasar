<?php
function cari($arr, $str)
{
  $str = str_split($str);
  $result = array();
  // array_values(call_user_func_array('array_merge', $array))
  foreach ($arr as $values) {
    // if (is_array($values)) {
    $result = array_merge($result, $values);
    // }
    if (!array_diff($str, $result)) return true;
    print_r(array_diff($str, $result));
  }
  return false;
}

$arr = [
  ['f', 'g', 'h', 'i'],
  ['j', 'k', 'p', 'q'],
  ['r', 's', 't', 'u']
];

echo cari($arr, 'fjrstp') ? 'true' : 'false';
