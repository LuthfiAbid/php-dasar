<?php
echo "<table border =\"1\" align='center'>";
$counter = 0;
for ($i = 1; $i <= 64; $i++) {
  if (($i - 1) % 8 == 0) {
    echo "<tr>";
  }
  if ($counter >= 2) {
    $counter = 0;
    echo "<td>" . $i . "</td>";
  } else {
    $counter++;
    echo "<td style='background-color:black;color:white;'>" . $i . "</td>";
  }
  if ($i % 8 == 0) {
    echo "</tr>";
  }
}
echo "</table>";
