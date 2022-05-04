<?php
/*
Napisati PHP funkciju koja oduzima dva broja. Ulazni parametri su brojevi $a i $b. Funkcija vraća rezultat operacije oduzimanja. Pozvati funkciju sa proizvoljnim vrednostima i ispisati rezultat koji vraća funkcija.
*/
function minus($num1, $num2)
{
    $sum = $num1 - $num2;
    echo "Razlika brojeva $num1 i $num2 je: $sum";
}
minus(9, 6);

/*
Napisati PHP funkciju koja množi prva dva argumenta i od tog rezultata oduzima vrednost trećeg argumenta. Ulazni parametri su brojevi $a, $b i $c. Funkcija vraća rezultat. Pozvati funkciju sa proizvoljnim vrednostima i ispisati rezultat koji vraća.
*/
echo "<br><br> Zadatak 2 <br><br>";
function multipleDevide($num1, $num2, $num3)
{
    $sum = $num1 * $num2 - $num3;
    return $sum;
}

$sum = multipleDevide(3, 4, 5);
echo "Rezultat je: $sum";

/*
Napisati PHP funkciju koja prima tri numerička parametra: $a, $b i $c. U slučaju da je parametar $a veći od 0, funkcija vraća zbir $b i $c, u suprotnom vraća razliku $b i $c. Pozvati funkciju sa proizvoljnim vrednostima i ispisati rezultat koji vraća funkcija.
*/
echo "<br><br> Zadatak 3 <br><br>";
function three($a, $b, $c)
{
    if ($a > 0) {
        return $b + $c;
    } else {
        return $b - $c;
    }
}

$sum = three(-1, 5, 6);
echo "Rezultat 3. zadatka je: $sum";

/*
Napisati PHP funkciju koja vraća najmanji element niza. Niz je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim vrednostima i ispisati najmanji element niza koji vraća funkcija.
*/
echo "<br><br> Zadatak 4 <br><br>";
function minValueArray($array)
{
    $minValue = $array[0];
    foreach ($array as $num) {
        if ($num < $minValue) {
            $minValue = $num;
        }
    }
    return $minValue;
}

$arrayFn = minValueArray([33, 44, 555, 6786687, 7777]);
var_dump($arrayFn);
/*
Napisati PHP funkciju koja računa sumu svih vrednosti elemenata proizvoljnog niza koji je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim vrednostima i ispisati sumu elemenata niza koju vraća funkcija.
*/
echo "<br><br> Zadatak 5 <br><br>";
function plusArray($array)
{
    $sum = 0;
    foreach ($array as $num) {
        $sum += $num;
    }
    return $sum;
}

$arraySum = plusArray([1, 2, 3, 4, 5]);
echo "Zbir svih elemenata ovog niza je: $arraySum";
/*
Napisati PHP funkciju koja računa proizvod svih vrednosti elemenata proizvoljnog niza koji je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim vrednostima i ispisati proizvod elemenata niza koji vraća funkcija.
*/
echo "<br><br> Zadatak 6 <br><br>";
function multipleArray($array)
{
    $sum = 1;
    foreach ($array as $num) {
        $sum *= $num;
    }
    return $sum;
}

$arraySum = multipleArray([1, 2, 3, 4, 5]);
echo "Proizvod svih elemenata ovog niza je: $arraySum";

/*
Napisati PHP funkciju koja računa srednju vrednost elemenata proizvoljnog niza koji je ulazni parametar funkcije. Koristiti foreach petlju. Pozvati funkciju sa proizvoljnim vrednostima i ispisati vrednost koju vraća funkcija.
*/
echo "<br><br> Zadatak 7 <br><br>";

function middleValue($array)
{
    $sum = 0;
    $count = count($array);
    foreach ($array as $num) {
        $sum += $num;
    }
    return $sum / $count;
}

$middleValueSum = middleValue([1, 2, 3, 4,]);
echo "Srednja vrednost ovog niza je: $middleValueSum";
/*
Napisati PHP funkciju koja vraća niz svih neparnih celih brojeva u intervalu od broja $a do broja $b, koji su ulazni parametri funkcije.
*/
echo "<br><br> Zadatak 8 <br><br>";

function oddArrayNumbers($a, $b)
{
    $oddArray = [];
    for ($i = $a; $i <= $b; $i++) {
        if ($i % 2 === 1) {
            array_push($oddArray, $i);
        }
    }
    return $oddArray;
}

echo "<pre>";
var_dump(oddArrayNumbers(3, 8));
echo "</pre>";

/*
Napisati PHP funkciju koja proverava da li su svi elementi datog niza brojeva u datom opsegu. Elementi niza su poređani po veličini, od najmanjeg do najvećeg. Ulazni parametri funkcije su niz, donja granica i gornja granica. Funkcija treba da vrati boolean vrednost.
*/
echo "<br><br> Zadatak 9 <br><br>";

function checkArray($array, $min, $max)
{
    $arrayLength = count($array) - 1;
    if ($array[0] <= $min && $array[$arrayLength] <= $max) {
        return true;
    } else {
        return false;
    }
}

$arrayCheck = checkArray([3, 4, 5, 6, 7, 8], 3, 7);
echo "<pre>";
var_dump($arrayCheck);
echo "</pre>";

/*
Napisati PHP funkciju koja proverava da li su svi elementi datog niza brojeva u datom opsegu. Elementi niza nisu poređani po veličini. Ulazni parametri funkcije su niz, donja granica i gornja granica.
*/
echo "<br><br> Zadatak 10 <br><br>";

function checkArrayMix($array, $min, $max)
{
    foreach ($array as $el) {
        if ($el < $min or $el > $max) {
            return false;
        }
    }
    return true;
}
$arr = [5, 3, 7];
$min = 1;
$max = 6;
$sum = checkArrayMix($arr, $min, $max);
echo "<pre>";
var_dump($sum);
echo "</pre>";

/*
Napisati PHP funkciju koja vraća niz sa prvih 10 parnih brojeva većih ili jednakih broju $n, koji je ulazni parametar funkcije.
*/

echo "<br><br> Zadatak 11 <br><br>";

function tenEvenNumbers($n)
{
    $array = [];
    while (count($array) < 10) {
        if ($n % 2 === 0) {
            array_push($array, $n);
        }
        $n++;
    }
    return $array;
}
echo "<pre>";
var_dump(tenEvenNumbers(2));
echo "</pre>";

/*
Napisati PHP funkciju koja za dati niz $array i dati broj $a, koji predstavljaju ulazne parametre funkcije, vraća vrednost koliko puta se broj $a nalazi u datom nizu $array. Ispisati vrednost koju vraća funkcija.
*/
echo "<br><br> Zadatak 12 <br><br>";

function checkNumberInArray($array, $a)
{
    $sum = 0;
    foreach ($array as $el) {
        if ($el === $a) {
            $sum++;
        }
    }
    return $sum;
}
$array = [1, 1, 1, 1, 2, 3, 4, 5];

echo "<pre>";
var_dump(checkNumberInArray($array, 3));
echo "</pre>";

/*
Napisati PHP funkciju koja za dati niz $array i dati broj $a koji predstavljaju ulazne parametre funkcije, vraća vrednost koliko je elemenata niza $array deljivo sa brojem $a. Ispisati vrednost koju vraća funkcija.
*/

echo "<br><br> Zadatak 13 <br><br>";

function checkDivide($array, $a)
{
    $counter = 0;
    foreach ($array as $el) {
        if ($el % $a === 0) {
            $counter++;
        }
    }
    return $counter;
}

$array = [2, 3, 4, 5, 6, 7, 8, 9];

echo "<pre>";
var_dump(checkDivide($array, 2));
echo "</pre>";
