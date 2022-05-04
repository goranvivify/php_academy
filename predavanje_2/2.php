<?php
$array = ["neki tekst", 5, 6.54354, "T", true];
$array2 = [
    "Goran" => 39,
    "Marko" => 33,
    "Pera" => 44,
    ["neki tekst", 5, 6.54354, "T", true]
];
foreach ($array2 as $el) {
    echo $el . "<br>";
};

echo "<pre>";

$salaries = [
    "eric"  => 2000,
    "carl"  => 1000,
    "maceo" => 500,
];

// accessing (indexing)
var_dump($salaries['eric']);
var_dump($salaries['carl']);
var_dump($salaries['maceo']);

// iterating
foreach ($salaries as $name => $salary) {
    echo "$name's salary is $salary. <br>";
}
echo "</pre>";
