<?php
function bigram($str)
{
  $exp = explode(" ", $str);
  $chunk = array_chunk($exp, 2);
  $myString = "";
  foreach ($chunk as $value) {
    $myString .= "{$value[0]} {$value[1]}, ";
  }
  $trimmed = rtrim($myString, ", ");
  echo $trimmed;
}

$text = "Jakarta adalah ibukota negara Republik Indonesia";
bigram($text);
