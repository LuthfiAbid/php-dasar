<?php
function trigram($str)
{
  $exp = explode(" ", $str);
  $chunk = array_chunk($exp, 3);
  $myString = "";
  foreach ($chunk as $value) {
    $myString .= "{$value[0]} {$value[1]} {$value[2]}, ";
  }
  $trimmed = rtrim($myString, ", ");
  echo $trimmed;
}

$text = "Jakarta adalah ibukota negara Republik Indonesia";
trigram($text);
