<?php

/*
Napisati funkciju koja vraca najduzi indeks u nizu.
*/
echo "<br><br> Napisati funkciju koja vraca najduzi indeks u nizu. <br><br>";

echo "<pre>";

$testArray = [
    "qdq" => "dasd",
    "dqwwq" => "asdas",
    "q" => "adasdas",
    "ljkjjlkkljjkljkljkljkljlkljkjk" => "dadada",
    "qdwdqwdwqdwqwdqdqw" => "ddassa"
];

function logestIndex($array)
{
    $keys = array_keys($array);
    $count = "";

    foreach ($keys as $key) {
        if (strlen($key) > strlen($count)) {
            $count = $key;
        }
    }
    return $count;
}
print_r(logestIndex($testArray));

echo "</pre>";

/*
Napisati funkciju koja za niz brojeva, pronalazi nedostajuce vrednosti (npr [1,2,4,5,7], skripta vraca [3,6]).
*/
echo "<br><br> Napisati funkciju koja za niz brojeva, pronalazi nedostajuce vrednosti (npr [1,2,4,5,7], skripta vraca [3,6]) <br><br>";

echo "<pre>";

$numbers = [1, 2, 4, 5, 6, 9, 11];
$startNumber = $numbers[0];
$endNumber = end($numbers);
$compareArray = [];




for ($i = $startNumber; $i <= $endNumber; $i++) {
    array_push($compareArray, $i);
}

function missingValue($array1, $array2)
{
    global $result;
    return $result = array_diff($array2, $array1);
}

var_dump(missingValue($numbers, $compareArray));

echo "</pre>";

/*
Napisati funkciju koja ispisuje element niza sa najvecom apsolutnom vrednoscu.
*/
echo "<br><br> Napisati funkciju koja ispisuje element niza sa najvecom apsolutnom vrednoscu. <br><br>";

echo "<pre>";

$numbersArray = [2, 3, 4, -5, 55, -99, 32];

function maxAbsoluteValue($array)
{
    $numCheck = abs($array[0]);

    foreach ($array as $number) {


        if (abs($number) > abs($numCheck)) {
            $numCheck = abs($number);
            var_dump($numCheck);
        }
    }

    return $numCheck;
}

var_dump(maxAbsoluteValue($numbersArray));

echo "</pre>";

/*
Napisati funkciju koja vraca niz prvih 5 reci iz stringa.
*/

echo "<br><br> Napisati funkciju koja vraca niz prvih 5 reci iz stringa. <br><br>";

echo "<pre>";

$string = "Napisati funkciju koja vraca novi niz prvih 5 reci iz stringa.";



$newString = "";

function returnFiveElementsOfString($string)
{
    $elementsOfString = explode(" ", $string);

    for ($i = 0; $i < 5; $i++) {
        $newString[] =  $elementsOfString[$i];
    }
    return implode(" ", $newString);
}

var_dump(returnFiveElementsOfString($string));

echo "</pre>";
