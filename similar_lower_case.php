<?php
function similar($str)
{
  $lowerCase = strtolower($str);
  $lowerSame = similar_text($str, $lowerCase);

  echo $str . ' mengandung ' . $lowerSame . ' buah huruf kecil';
}
$str = "TranSISI";
similar($str);
