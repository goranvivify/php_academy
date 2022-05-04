<?php
/*
Napisati PHP funkciju koja prima niz stringova i vraća jedan string tako što spaja sve elemente niza.

Napisati funkciju koja prima niz i vraca drugi niz sa obrnutim redosledom elemenata.

Napisati funkciju koja prima niz stringova kao prvi parametar, i neki string kao drugi parametar. Funkcija treba da vrati broj koji pokazuje koliko puta se dati string pojavljuje u datom nizu.

Napisati funkciju koja prima asocijativni višedimenzionalni niz sa imenima i polovima osoba kao prvi parametar, i string 'm' ili 'z' kao drugi parametar. Struktura niza koji se prosleđuje biće ovakva: 
[
[ 'ime' => 'Petar Petrovic', 'pol' => 'm' ], 
[ 'ime' => 'Jagodinka Simonovic', 'pol' => 'z' ], 
…
]
*/
echo "<br><br> Zadatak 5 <br><br>";

$array = [
    ['ime' => 'Neki Lik', 'pol' => 'm'],
    ['ime' => 'Jagodinka Simonovic', 'pol' => 'z'],
    ['ime' => 'BRanka Katic', 'pol' => 'z'],
    ['ime' => 'Majkl Dzordan', 'pol' => 'm'],
    ['ime' => 'Simo Matavulj', 'pol' => 'm']
];

function countGivenGender($persons, $gender)
{
    $counter = 0;
    foreach ($persons as $person) {
        if ($person['pol'] === $gender) {
            $counter++;
        }
    }
    return $counter;
}

echo countGivenGender($array, "z");
/*
Funkcija treba da vrati broj koji pokazuje koliko osoba sa tim polom se nalaze u tom nizu.
   
Napisati drugu verziju funkcije iz prethodnog zadatka, koja će umesto broja osoba sa tim polom vraćati novi niz, koji sadrži osobe sa tim polom. Niz koji se vraća će imati istu strukturu kao originalni, ali manje elemenata.
Napisati funkciju koja prima kao parametre dva niza, i vraća niz koji se sastoji od elemenata iz oba niza spojenih u jedan.
Napisati funkciju koja prima kao parametre niz brojeva, i dva broja koja predstavljaju donju i gornju granicu opsega. Funkcija treba da vraća novi niz, koji sadrži samo one elemente originalnog niza koji se nalaze unutar opsega koji definisu drugi i treći parametar.

*/
