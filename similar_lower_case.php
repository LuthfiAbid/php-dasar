<?php
function similar($str)
{
  $lowerCase = strtolower($str);
  $lowerSame = similar_text($str, $lowerCase);

  echo $lowerSame;
}
$str = "TranSISI";
similar($str);
