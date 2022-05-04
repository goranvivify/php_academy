<?php
/*
Najpre završiti sve zadatke od prethodnog dana.

Napisati PHP skriptu koja kreira niz: $color = ['white', 'green', 'red'] i ispisuje njegove vrednosti. Koristiti foreach petlju.
*/
$color = ['white', 'green', 'red'];

foreach ($color as $col) {
    echo $col . "<br>";
};


/*
Napisati PHP skriptu koja kreira numerički niz koji predstavlja mesece u godini i pomoću foreach petlje ispisati sve elemente niza.
*/

$months = [];

for ($i = 1; $i <= 12; $i++) {
    array_push($months, $i);
};

foreach ($months as $month) {
    echo $month;
    echo "<br>";
}

/*
Napisati PHP skriptu koja za dati niz: 
	$capitals = [
    		"Italy"      => "Rome",
    		"Luxembourg" => "Luxembourg",
    		"Belgium"    => "Brussels",
    		"Denmark"    => "Copenhagen",
    		"Finland"    => "Helsinki",
	];
ispisuje sledeće: 
	The capital of Italy is Rome  
	The capital of Luxembourg is Luxembourg  
	The capital of Belgium is Brussels
		The capital of Denmark is Copenhagen
		The capital of Finland is Helsinki
	Koristiti foreach petlju.
*/
$capitals = [
    "Italy"      => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium"    => "Brussels",
    "Denmark"    => "Copenhagen",
    "Finland"    => "Helsinki",
];
foreach ($capitals as $country => $capital) {
    echo "The capital of $country is $capital <br>";
}
/*
Napisati PHP skriptu koja ispisuje sledeći string: 

"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"

Reči 'red', 'green' and 'white' u datom stringu su iz niza $color = ['white', 'green', 'red', 'blue', 'black'];
*/
$color = ['white', 'green', 'red', 'blue', 'black'];

$someText = "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo $someText;

/*
Napraviti promenljivu $prirodniBrojevi i dodeliti joj vrednost praznog niza. U ovaj niz upisati prvih 100 prirodnih brojeva pomoću for petlje. Ispisati sadržaj promenljive pomoću var_dump funkcije
*/
$prirodniBrojevi = [];

for ($i = 1; $i <= 100; $i++) {
    array_push($prirodniBrojevi, $i);
}
echo "<pre>";
var_dump($prirodniBrojevi);
echo "</pre>";


/*
Napraviti promenljivu $meseci i dodeliti joj vrednost asocijativnog niza koji kao ključeve sadrži ime meseca a kao vrednost broj dana u tom mesecu (tj. ['Januar' => 31, 'Februar' => 28, …]). Iterirajući (prolazeći) kroz ovaj niz ispisati sve moguće datume u godini (dakle 1. Januar, 2. Januar… 31. Januar, 1. Februar, 2. Februar…). 
*/
$meseci = [
    'Januar' => 31,
    'Februar' => 28,
    'Mart' => 31,
    'April' => 30,
    'Maj' => 31,
    'Jun' => 30,
    'Jul' => 31,
    'Avgust' => 31,
    'Septembar' => 30,
    'Oktobar' => 31,
    'Novembar' => 30,
    'Decembar' => 31,
];
foreach ($meseci as $month => $days) {
    for ($i = 1; $i <= $days; $i++) {
        echo "$i. $month <br>";
    }
}

/*
Napraviti dva prazna niza, $a i $b. Koristeći jednu for petlju, postaviti sve parne brojeve od 1 do 100 u niz $a, i sve neparne brojeve od 1 do 100 u niz $b. Ispisati sadržaj nizova
*/
$a = [];
$b = [];

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        array_push($a, $i);
    } else {
        array_push($b, $i);
    }
}
echo "<pre>";
var_dump($a);
echo "</pre>";

/*
Napraviti dva niza, $a i $b sa proizvoljnim brojem elemenata tipa string. U slučaju da je broj elementa u nizu $a veći od broja elemeneta u nizu $b, ispisati sve elemenete niza $a. U suprotnom, ispisati elemente niza $b. Broj elemenata u nizu se može dobiti pomoću funkcije count(), npr. broj elemenata u nizu $a se dobija pomoću count($a).
*/
$a = [1, 2, 3, 4, 5, 6, 7];
$b = [1, 2, 3, 4, 5, 6];

if (count($a) > count($b)) {
    echo "<pre>";
    var_dump(($a));
    echo "</pre>";
} else {
    echo "<pre>";
    var_dump($b);
    echo "</pre>";
}

/*
Napraviti dva niza, $a i $b sa po proizvoljnih 10 elemenata tipa string. Pomoću petlje (for ili foreach, kako god je jednostavnije) napraviti asocijativni niz $c koji koristi elemente niza $a kao ključeve, i elemente niza $b kao vrednosti
*/
$a = ["jedan", "dva", "tri", "cetiri", "pet", "sest", "sedam", "osam", "devet", "deset"];
$b = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$c = array();

foreach ($a as $string => $number) {
    $c[$number] = $b[$string];
}
echo "<pre>";
var_dump($c);
echo "</pre>";
/*
Napraviti dva niza, $a i $b sa proizvoljnim brojem elemenata tipa string. Uz pomoć for petlje dodati elemente niza $b na kraj niza $a u obrnutom redosledu.
*/
$a = ["jedan", "dva", "tri", "cetiri", "pet", "sest", "sedam", "osam", "devet", "deset"];
$b = ["aaaa", "bbbb", "cccc", "dddd", "eeee", "ffff", "gggg", "hhhh", "iiii", "jjjj"];
for ($el = count($b) - 1; $el >= 0; $el--) {
    array_push($a, $b[$el]);
}
echo "<pre>";
var_dump($a);
echo "</pre>";

/*
Napraviti dva niza, $a i $b sa proizvoljnim brojem elemenata tipa integer. Napraviti treći niz $c koji sadrži presek ova dva niza (elementi koji se nalaze u oba niza). Koristiti for petlju
*/
$a = [4,3,45,5,2,23,4];
$b = [4,23,5,67,7,5,35,6354,53,24,2,52];
$c = [];


/*
Napraviti dva niza, $a i $b sa proizvoljnim brojem elemenata tipa integer. Napraviti treći niz $c koji sadrži presek ova dva niza (elementi koji se nalaze u oba niza). Koristiti ugrađenu php funkciju (pronaći odgovarajuću funkciju u dokumentaciji na http://php.net/manual/en/ref.array.php)
*/
$a = [4,3,45,5,2,23,4];
$b = [4,23,5,67,7,5,35,6354,53,24,2,52];
$c = array_intersect($a, $b);

var_dump($c);


/*
Napraviti dva niza, $a i $b sa proizvoljnim brojem elemenata tipa integer. Napraviti treći niz $c koji sadrži uniju ova dva niza (svi elementi koji se nalaze u bar jednom nizu, bez ponavljanja elemenata).Koristiti ugrađene php funkcije (potrebne su dve funkcije, pronaći odgovarajuće u dokumentaciji na http://php.net/manual/en/ref.array.php)
*/
