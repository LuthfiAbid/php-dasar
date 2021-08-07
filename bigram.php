<?php
function bigram($str)
{
  $exp = explode(" ", $str);
  $chunk = array_chunk($exp, 2);
  foreach ($chunk as $value) {
    print_r("{$value[0]} {$value[1]}, ");
  }
}

$text = "Jakarta adalah ibukota negara Republik Indonesia";
bigram($text);
