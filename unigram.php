<?php
function unigram($str)
{
  $exp = explode(" ", $str);
  print_r(implode(", ", $exp));
}

$text = "Jakarta adalah ibukota negara Republik Indonesia";
unigram($text);
