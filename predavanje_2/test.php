<?php
$a = ["jedan", "dva", "tri", "cetiri", "pet", "sest", "sedam", "osam", "devet", "deset"];
$b = ["aaaa", "bbbb", "cccc", "dddd", "eeee", "ffff", "gggg", "hhhh", "iiii", "jjjj"];
for ($el = count($b) - 1; $el >= 0; $el--) {
    array_push($a, $b[$el]);
}
echo "<pre>";
var_dump($a);
echo "</pre>";


$a = [4, 3, 45, 5, 2, 23, 4];
$b = [4, 23, 5, 67, 7, 5, 35, 6354, 53, 24, 2, 52];
$c = array_intersect($a, $b);

var_dump($c);
