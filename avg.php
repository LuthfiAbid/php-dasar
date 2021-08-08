<?php
function avg($arr){
  $sum = array_sum($arr)/count($arr);
  $avg = round($sum,2);
  echo $avg;
}
$nilai = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);
avg($nilai);