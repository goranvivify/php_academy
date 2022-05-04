<?php
$array = ["neki tekst", 5, 6.54354, "T", true];
$array2 = [
    "Goran" => 39,
    "Marko" => 33,
    "Pera" => 44,
    ["neki tekst", 5, 6.54354, "T", true]
];
foreach ($array as $el) {
    echo $el;
};
// var_dump(count($array2));
echo "<pre>";
var_dump($array2);
echo "</pre>";
echo ($array2["Goran"]) . "<br>";
/*
Najpre završiti sve zadatke od prethodnog dana. Ukoliko u zadatku nisu date vrednosti nekih promenljivih, dodelite im vrednost po svom izboru.

Napisati PHP skriptu koja kreira promenljive $a i $b i dodeljuje im vrednosti 6 i 8. Ako je zbir ovih vrednosti veći od 10, ispisati zbir promenljivih, u suprotnom ispisati njihovu razliku. Koristiti if/else.
*/
echo "Zadatak 1 <br> <br>";

$a = 6;
$b = 8;

if ($a + $b > 10) {
    echo "Zbir brojeva $a i $b je: " . $a + $b;
} else {
    echo "Razlika brojeva $a i $b je: " . $a - $b;
}

echo "<br> <br>";
/*
Napisati PHP skriptu koja ispisuje koji je godišnji kvartal u zavisnosti koji je mesec u godini. Koristiti if/else. Redni broj meseca u godini se može dobiti pomoću date("n").
*/
echo "Zadatak 2 <br> <br>";

$date = date("n");

if ($date <= 3) {
    echo "Trenutno je I kvartal tekuce godine";
} else if ($date <= 6) {
    echo "Trenutno je II kvartal tekuce godine";
} else if ($date <= 9) {
    echo "Trenutno je III kvartal tekuce godine";
} else {
    echo "Trenutno je IV kvartal tekuce godine";
}
echo "<br> <br>";

/*
Napraviti promenljivu $a sa vrednošću 5 i promenljivu $b sa vrednošću 7. Ukoliko su obe promenljive tipa “integer”, ispisati poruku "Promenljive su tipa integer", u suprotnom ispisati "Promenljive nisu tipa integer". Koristiti if/else. Tip promenljive se dobija pomoću funkcije gettype, npr. tip promenljive $a se dobija pomoću gettype($a).
*/
echo "Zadatak 3 <br> <br>";
$a = 5;
$b = 7;

if (gettype($a) && gettype($b) === "integer") {
    echo "Promenljive su tipa integer";
} else {
    echo "Promenljive nisu tipa integer";
}
echo "<br> <br>";

/*
Napraviti promenljivu $a sa vrednošću 5 i promenljivu $b sa vrednošću zbira broja 9 i stringa "4". Ukoliko su obe promenljive tipa integer, ispisati poruku "Promenljive su tipa integer" i ispisati njihov zbir, u suprotnom ispisati "Promenljive nisu tipa integer". Koristiti funkciju gettype i if/else.
*/
echo "Zadatak 4 <br> <br>";
$a = 5;
$b = 9 + "4";

if (gettype($a) && gettype($b) === "integer") {
    echo "Promenljive su tipa integer";
} else {
    echo "Promenljive nisu tipa integer";
}

echo "<br> <br>";

/*
Napisati PHP skriptu koja za promenljive $a i $b, koje sadrže proizvoljne brojeve, ispisuje rezultat operacije čiji naziv je sadržan u promenljivoj $operacija (moze da bude 'saberi', 'oduzmi', 'pomnozi', 'podeli'). Npr. ako je vrednost promenljive $operacija ‘saberi’, ispisati rezultat $a + $b. Koristiti switch.
*/

echo "Zadatak 5 <br> <br>";
$a = 4;
$b = 5;
$operacija = ['saberi', 'oduzmi', 'pomnozi', 'podeli'];
foreach ($operacija as $value) {
    switch ($value) {
        case "saberi":
            echo "Zbir bojeva $a i $b je: " . $a + $b . "<br> <br>";
            break;
        case "oduzmi":
            echo "Razlika brojeva $a i $b je: " . $a - $b . "<br> <br>";
            break;
        case "pomnozi":
            echo "Proizvod brojeva $a i $b je: " . $a * $b . "<br> <br>";
            break;
        case "podeli":
            echo "Kolicnik brojeva $a i $b je: " . $a / $b . "<br> <br>";
            break;
    }
}



echo "<br> <br>";

/*
Napisati PHP skriptu koja na osnovu vrednosti promenljive $brojBodova ispisuje konačnu ocenu. Postaviti da je broj bodova proizvoljan broj od 0 do 100. Ocena se određuje na sledeći način:
Manje od 55 poena, ocena 5
Od 55 do 64 poena, ocena 6
Od 65 do 74 poena, ocena 7
Od 75 do 84 poena, ocena 8
Od 85 do 94 poena, ocena 9
95 i više poena, ocena 10
*/
echo "Zadatak 5 <br> <br>";
$brojBodova = rand(0, 100);
if ($brojBodova < 55) {
    echo "Ocena je 5 <br>";
} else if ($brojBodova <= 64) {
    echo "Ocena je 6 <br>";
} else if ($brojBodova <= 74) {
    echo "Ocena je 7 <br>";
} else if ($brojBodova <= 74) {
    echo "Ocena je 8 <br>";
} else if ($brojBodova <= 94) {
    echo "Ocena je 9 <br>";
} else {
    echo "Ocena je 10 <br>";
}
echo "<br> <br>";

/*
Napisati PHP skriptu koja na osnovu vrednosti promenljive $n, koja sadrži broj, ispisuje "$n je neparan broj" ako je broj neparan, u suprotnom "$n je paran broj".

Napisati PHP skriptu koja ako joj je dat broj godine proverava da li je data godina prestupna. 

Napisati PHP skriptu koja za dati celi broj (integer) ispisuje poruku da li je broj jednocifren, dvocifren, ili trocifren.

Napisati PHP skriptu koja ispisuje brojeve od 20 do 30 koristeći while petlju.

Napisati PHP skriptu koja ispisuje prvih 10 neparnih prirodnih brojeva koristeći while petlju.
*/
echo "Zadatak 11 <br> <br>";
$count = 0;
$number = 0;
while ($count < 10) {
    if ($number % 2 === 1) {
        echo $number . "<br>";
        $count++;
    }
    $number++;
}

echo "<br> <br>";

/*
Napisati PHP skriptu koja ispisuje brojeve od 0 do 5 koristeći for petlju.

 Napisati PHP skriptu koja ispisuje parne brojeve od 0 do 10 koristeći for petlju.
*/
echo "Zadatak 13 <br> <br>";

$number = 0;
$count = 0;
for ($count = 0; $count < 10;) {
    if ($number % 2 === 0) {
        echo $number . "<br>";
        $count++;
    }
    $number++;
}

echo "<br> <br>";

/*
Napisati PHP skriptu koja sabira prvih 100 prirodnih brojeva. Ispisati rezultat

Napisati PHP skriptu koja sabira prvih 20 neparnih prirodnih brojeva. Ispisati rezultat

Napisati PHP skriptu koja za date tri promenljive, $a, $b i $c, koje sadrže razlicite brojeve, ispisuje koja promenljiva sadrži najveći broj, a koja promenljiva najmanji.
*/
echo "Zadatak 16 <br> <br>";

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if ($a > $b && $a > $c) {
    echo "Od zadatih brojeva, najveci je: $a <br>";
} else if ($b > $a && $b > $c) {
    echo "Od zadatih brojeva, najveci je: $b <br>";
} else {
    echo "Od zadatih brojeva, najveci je: $c <br>";
}

if ($a < $b && $a < $c) {
    echo "Od zadatih brojeva, najmanji je: $a <br>";
} else if ($b < $a && $b < $c) {
    echo "Od zadatih brojeva, najmanji je: $b <br>";
} else {
    echo "Od zadatih brojeva, najmanji je: $c <br>";
}

echo "<br> <br>";

/*
Napisati PHP skriptu koja za date tri promenljive $a, $b i $c koje sadrže brojeve redom ispisuje brojeve od najmanjeg ka najvećem koristeći if/else.
*/
echo "Zadatak 17 <br> <br>";

$a = 3;
$b = 7;
$c = 9;

if ($a > $b && $b > $c) {
    echo "$a, $b, $c <br> 1";
} else if ($a > $b && $b < $c) {
    echo "$a, $c, $b <br> 2";
} else if ($b > $a && $a > $c) {
    echo "$b, $a, $c <br> 3";
} else if ($b > $a && $a < $c) {
    echo "$b, $c, $a <br> 4";
} else if ($c > $a && $b < $a) {
    echo "$c, $a, $b <br> 5";
} else {
    echo "$c, $b, $a <br>";
}

echo "<br> <br>";
