<?php
function enkripsi($str)
{
  $str = str_split($str);
  $plus = 1;
  $min = 0;
  // DFHKNQ akan memberikan output EDKGSK
  for ($i = 0; $i < count($str); $i++) {
    if ($i % 2 == 0) {
      $str[$i] = chr(ord($str[$i]) + $plus);
      $plus += 2;
    } else {
      $min -= 2;
      $str[$i] = chr(ord($str[$i]) + $min);
    }
  }
  for ($i = 0; $i < count($str); $i++) {
    if ($str[$i] > 'Z') {
      $str[$i] = 'A';
    }
  }
  print_r(implode($str));
}
$input = 'DFHKNQ';

enkripsi($input);
