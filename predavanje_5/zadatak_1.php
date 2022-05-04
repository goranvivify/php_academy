<?php

/*
Napisati funkciju koja racuna obim kruga (2*r*pi). Ukoliko poluprecnik kruga nije veci od nule, baciti izuzetak koji o tome obavestava korisnika.
*/
echo "<pre>";

function obim($r)
{

    if ($r <= 0) {
        throw new Exception("Precnik je manji ili jednak NULA");
    }
    return 2 * $r * 3.14;
}

try {
    echo "Obim kruga je: " . obim(-1);
} catch (Exception $e) {
    echo "Caught exception: ", $e->getMessage(), "<br>";
}


echo "</pre>";


