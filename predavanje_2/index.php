<?php
$a = 0;

for ($i = 0; $i < 10; $i++) {
    $a += 10;
}

echo "Loop stopped, value of variable i is $i<br>";
echo "Value of variable a is $a";


$array = ["neki tekst", 5, 6.54354, "T", true];

echo "<pre>";
var_dump($array);
echo "</pre>";
// $i = 0;

// do {
//     // increase $i by 1...
//     $i++;
//     // as long as $i is less than 10
// } while ($i < 11);

// echo "Loop stopped, value of variable i is $i";



// $i = 0;


// // as long as $i is less than 10...
// while ($i < 10) {
//     // increase $i by 1
//     $i++;
// }

// echo "Loop stopped, value of variable i is $i";



// $today = "Monday";
// if ($today === "Monday") {
// echo "Finally!";
// } else if ($today === "Friday!") {
// echo "Happy Weekend!";
// } else {
// echo ":-(";
// }

// switch ($today) {
// case "Monday":
// echo "Today is Monday";;

// case "Tuesday":
// echo "Today is Tuesday";
// break;

// default:
// echo "Which day is this ?";
// }
