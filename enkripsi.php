<?php
// DFHKNQ akan memberikan output EDKGSK
function enkripsi($str)
{
  $str = str_split($str);
  $str[0] = chr(ord($str[0]) + 1);
  $str[1] = chr(ord($str[1]) - 2);
  $str[2] = chr(ord($str[2]) + 3);
  $str[3] = chr(ord($str[3]) - 4);
  $str[4] = chr(ord($str[4]) + 5);
  $str[5] = chr(ord($str[5]) - 6);
  for ($i = 0; $i < count($str); $i++) {
    if ($str[$i] > 'Z') {
      $str[$i] = 'A';
    }
  }
  print_r($str);
}
$input = 'DFHKNQ';

enkripsi($input);
