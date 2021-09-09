<?php

$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

$max = (explode(" ",$nilai));
$min = (explode(" ",$nilai));
$length = strlen($nilai);
$rata = array_sum($max)/$length;

arsort($max);
asort($min);

$max7 = array_slice($max, 0, 7);
$min7 = array_slice($min, 0, 7);

foreach ($max7 as $key => $val) {
 echo "max[$key] = $val\n";
}

echo "\n";

foreach ($min7 as $key => $val) {
 echo "min[$key] = $val\n";
}
echo "\n";
echo "rata - rata = $rata\n";

?>
