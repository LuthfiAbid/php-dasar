<?php
function trigram($str)
{
  $exp = explode(" ", $str);
  $chunk = array_chunk($exp, 3);
  foreach ($chunk as $value) {
    print_r("{$value[0]} {$value[1]} {$value[2]}, ");
  }
}

$text = "Jakarta adalah ibukota negara Republik Indonesia";
trigram($text);
