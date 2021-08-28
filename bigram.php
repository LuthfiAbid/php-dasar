<?php
function trigram($str)
{
  $exp = explode(" ", $str);
  $chunk = array_chunk($exp, 2);
  $myString = "";
  for ($i = 0; $i < count($chunk); $i++) {
    $myString .= implode(" ", $chunk[$i]);
    $myString .= ", ";
  }
  $trimmed = trim($myString, ", ");
  echo $trimmed;
}

$text = "Jakarta adalah ibukota negara Republik Indonesia asdasd asdasd asdasd";
trigram($text);
