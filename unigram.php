<?php
function unigram($str)
{
  $exp = explode(" ", $str);
  echo (implode(", ", $exp));
}

$text = "Jakarta adalah ibukota negara Republik Indonesia";
unigram($text);
