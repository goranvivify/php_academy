<?php

// Iskoristiti gornji primer tako da se vrednosti za poluprecnik uzimaju iz niza brojeva, i tako da se skripta ne prekida fatalnom greskom (koristiti try/catch).

echo "<pre>";

function obim($r)
{

    if ($r <= 0) {
        throw new Exception("Precnik je manji ili jednak NULA");
    }
    return 2 * $r * 3.14;
}

$values = [1, 2, 3, 4, -6, 55, 0];

foreach ($values as $value) {
    try {
        echo "Obim kruga je: " . obim($value) . "<br><br>";
    } catch (Exception $e) {
        echo "Caught exception: ", $e->getMessage(), "<br><br>";
    }
}


echo "</pre>";
