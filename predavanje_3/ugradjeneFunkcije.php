<?php
/*
Napisati funkciju koja vadi svako drugo slovo u zadatom stringu, povratna vrednost treba da bude string bez tih slova.
*/
echo "<br><br> Zadatak 1 <br><br>";

$array = [
    ['ime' => 'Neki Lik', 'pol' => 'm'],
    ['ime' => 'Jagodinka Simonovic', 'pol' => 'z'],
    ['ime' => 'Branka Katic', 'pol' => 'z'],
    ['ime' => 'Majkl Dzordan', 'pol' => 'm'],
    ['ime' => 'Simo Matavulj', 'pol' => 'm']
];

function printPersons($persons)
{
    foreach ($persons as $person) {
        foreach ($person as $key => $value) {
            echo "Vrednost za kljuc $key je $value <br>";
        }
        echo "<br>";
    }
}

echo printPersons($array);

// echo abs(-5);

echo min([2, 3, 4, 5, 6, 67, 34, 234, 324, "nesto" => [1, 2, 3,], 523, 2, 43234, 234, 243]);
/*
Napisati funkciju koja vraca prvih 20 karaktera nekog stringa.
*/
echo "<br> ZADATAK 1 <br>";


$string = "Ovo je neki string koji cemo poslati na seckanje";
function partOfString($string)
{
    return substr($string, 0, 20);
}

echo "<pre>";
var_dump(partOfString($string));
echo "</pre>";
/*
Napisati funkciju koja ispisuje na kojim se mestima u stringu nalazi slovo ‘b’.
*/
echo "<br> ZADATAK 2 <br>";

$string = "Ovo je neki string u kojem cemo traziti slovo b, a ne B";

function findB($string)
{
    return strpos($string, "b");
}

echo "<pre>";
var_dump(findB($string));
echo "</pre>";
/*
Napisati funkciju koja svako malo slovo ‘a’ u stringu zamenjuje velikim slovom ‘A’.
*/
// echo "<br> ZADATAK 3 - Napisati funkciju koja svako malo slovo ‘a’ u stringu zamenjuje velikim slovom ‘A’. <br>";

// $string = "Ovo je neki string u kojem cemo mala slova a promeniti u veliko slovo A";
// $splitStringToElements = str_split($string);
// function upperCaseLetterA($string)
// {
//     $newArray = [];
//     for ($i = 0; $i < count($string); $i++) {
//         if ($string[$i] === "a") {
//             $string[$i] = strtoupper($string[$i]);
//         }
//         $newArray[$i] = $string[$i];
//     }
//     return implode("", $newArray);
// }
// echo "<pre>";
// echo (upperCaseLetterA($splitStringToElements));
// echo "</pre>";
echo "<br> ZADATAK 3 - Napisati funkciju koja svako malo slovo 'a' u stringu zamenjuje velikim slovom 'A'. <br>";

$string = "Ovo je neki string u kojem cemo mala slova a promeniti u veliko slovo A";

function upperCaseLetterA($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] === "a") {
            $string[$i] = strtoupper($string[$i]);
        }
    }
    return $string;
}

echo "<pre>";
echo (upperCaseLetterA($string));
echo "</pre>";
/*
Napisati funkciju koja zamenjuje mesta prvoj i poslednjoj reci u zadatom stringu, i ispisuje novokreirani string.
*/
echo "<br> ZADATAK 3 - Napisati funkciju koja zamenjuje mesta prvoj i poslednjoj reci u zadatom stringu, i ispisuje novokreirani string. <br>";

$string = "Prva i poslednja rec ce zameniti mesto prolazom kroz funkciju";

function switcFirstLastWord($string)
{
    str_replace("Prva", "funkciju", $string);
    str_replace("funkciju", "Prva", $string);
    return $string;
}

echo "<pre>";
echo (switcFirstLastWord($string));
echo "</pre>";

/*
Napisati funkciju koja iz zadatog niza uzima prva tri elementa, i pretvara ih u string, kod kojeg svaka rec zapocinje velikim slovom.
Napisati funkciju koja broji koliko se puta svaki element javlja u nizu
Napisati funkciju, koja elemente zadatog niza modifikuje tako da njegove nove vrednosti budu kvadratni koren prethodne vrednosti.
Napisati funkciju koja zadati string pretvara u niz čiji su elementi duzine pojedinacih reci u stringu.
Napisati funkciju koja vraca najzastupljeniji karakter u zadatom stringu.
Napisati funkciju koja u zadatom asocijativnom nizu, pronalazi element sa najduzim kljucem i zamenjuje njegovu vrednost sa stringom ‘Ovde je najduzi indeks’. Ispisati novokreirani niz.
Napisati funkciju koja ubacuje novi element u nizu, na drugo mesto sa kraja.
Napisati funkciju koja prima dva niza i vraca duzinu najduzeg elementa medju onima koji se nalaze u oba niza.
Napisati funkciju koja na osnovu zadatog asocijativnog niza kreira novi niz, uzimajuci u obzir samo elemente koji su parni.
Napisati funkciju koja na osnovu zadatog asocijativnog niza kreira novi niz, uzimajuci u obzir samo elemente kod kojih je duzina kljuca parna.



Zadaci sa slajda:
Napisati funkciju koja vraca nasumican broj izmedju 5 i 500.
*/
echo "<br> <br>";
function randomNumber($min, $max)
{
    return rand($min, $max);
}

echo randomNumber(5, 500);

/*
Napisati funkciju koja za niz brojeva (45, 12, 1, 100, 6) izracunava kvadratne korene svakog broja, smesta ih u novi niz, i ispisuje na ekranu.
*/
echo "<br> <br>";

$array = [45, 12, 1, 100, 6];
$squaredArray = [];
function squareRoot($array)
{
    global $squaredArray;
    foreach ($array as $number) {
        // array_push($squaredArray, sqrt($number));
        $squaredArray[] = sqrt($number);
    }
    return $squaredArray;
}
echo "<pre>";
var_dump(squareRoot($array));
echo "</pre>";
/*
Prosiriti prethodni primer tako da se u novi niz smestaju samo cele vrednosti brojeva, i to zaokruzene na gornju vrednost.
*/
echo "<br> <br>";

$array = [45, 12, 1, 100, 6];
$squaredArray = [];

function squareRootRound($array)
{
    global $squaredArray;
    foreach ($array as $number) {
        // $squareNumber = sqrt($number);
        // array_push($squaredArray, round($squareNumber));
        $squaredArray[] = ceil(sqrt($number));
    }
    return $squaredArray;
}

echo "<pre>";
var_dump(squareRootRound($array));
echo "</pre>";



/*

Zadaci sa slajda - stringovi

Napisati funkciju koja zadatu recenicu transformise:
Svako slovo u zadatoj recenici postaje veliko slovo
*/
echo "<br> ZADATAK 1 - STRINGOVI <br>";

$string = "Ovo je neki string u kojem cemo mala slova promeniti u velika slova";

function upperCase($string)
{
    return strtoupper($string);
}
echo "<pre>";
var_dump(upperCase($string));
echo "</pre>";
/*
Svako slovo u zadatoj recenici postaje malo slovo
*/
echo "<br> ZADATAK 2 - STRINGOVI <br>";

$string = "OVO JE STRING U KOJEM CEMO VELIKA SLOVA PROMENITI U MALA SLOVA";

function lowerCase($string)
{
    return strtolower($string);
}
echo "<pre>";
var_dump(lowerCase($string));
echo "</pre>";


/*
Prva slova svake reci postaju veliko slovo
*/
echo "<br> ZADATAK 3 - STRINGOVI <br>";

$string = "sva prva Slova rEci ce postati velika slova";

function uppercaseFirstLetter($string)
{
    return ucwords($string);
}
echo "<pre>";
var_dump(uppercaseFirstLetter($string));
echo "</pre>";


//bez ucwords
echo "<br> ZADATAK 3 / 2- STRINGOVI <br>";

$explodeString = explode(" ", $string);

function noUcwords($string)
{
    $newArray = [];
    foreach ($string as $word) {
        $newArray[] = ucfirst($word);
    }
    return implode(" ", $newArray);

    $newString = "";
    for ($i = 0; $i < count($string) - 1; $i++) {
        $newString .= ucfirst($string[$i]) . " ";
    }

    return $newString .= ucfirst($string[$i]);
}

echo "<pre>";
var_dump(noUcwords($explodeString));
echo "</pre>";

/*
Napisati funkciju koja iz korisnikovog emaila, izvlaci njegov username (zatim prepraviti da vraca domen).
*/
echo "<br> ZADATAK 4 - STRINGOVI <br>";
$email = "neki_lik@email.com";
function getNameEmail($email)
{
    return strstr($email, "@", true);
}

echo "<pre>";
var_dump(getNameEmail($email));
echo "</pre>";

echo "<br> ZADATAK 6 - STRINGOVI <br>";
$email = "neki_lik@email.com";
function getEmail($email)
{
    return strstr($email, "@");
}

echo "<pre>";
var_dump(getEmail($email));
echo "</pre>";

/*
Napisati funkciju koja vraca najduzu rec iz zadatog stringa.
*/

echo "<pre>";

function longestWord(string $array): string
{

    $words = explode(" ", $array);

    $logestWord = "";

    foreach ($words as $word) {
        if (strlen($word) > strlen($logestWord)) {
            $logestWord = $word;
        }
    }

    return $logestWord;
}

$testString = "Ovo je string s kojim testiramo nasu funkciju.";

var_dump(longestWord($testString));


echo "</pre>";
