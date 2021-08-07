<?php
function low($arr)
{
  sort($arr);
  print_r(implode(', ', array_slice($arr, 0, 7)));
}
$nilai = array(72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86);
low($nilai);
