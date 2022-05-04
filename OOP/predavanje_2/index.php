<?php
/*
Modelirati jednostavan sistem bankarstva:
Napraviti klasu Racun koja sadrži atribute brojRacuna, banka, vlasnik i stanje.
Broj racuna je public, ostali atributi su private.

Konstruktor klase Racun prima četiri argumenta, koji odgovaraju gorepomenutim atributima, i setuje ih.

Napraviti klasu Banka koja sadrži atribute ime (public) i niz racuni (private). 

U klasi Banka dodati metodu dodajRacun, koja kao argumente prima ime vlasnika, pocetno stanje i broj racuna, pravi novi objekat klase Racun, ubacuje ga u svoj niz racuni i vraća novostvoreni račun.
*/
function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}


class Racun
{

    public $brojRacuna;
    private $banka;
    private $vlasnik;
    private $stanje;

    public function __construct($brojRacuna, $banka, $vlasnik, $stanje)
    {
        $this->brojRacuna = $brojRacuna;
        $this->banka = $banka;
        $this->vlasnik = $vlasnik;
        $this->stanje = $stanje;
    }
}

class Banka
{

    public $ime;
    private $racuni = [];

    public function __construct($ime)
    {
        $this->ime = $ime;
    }

    public function dodajRacun($imeVlasnika, $pocetnoStanje, $brojRacuna)
    {
        $noviRacun = new Racun($brojRacuna, $this->ime, $imeVlasnika, $this->stanje = $pocetnoStanje);
        $this->racuni[] = $noviRacun;
        return $noviRacun;
    }
}


$goran = new Racun(1234, "Intesa", "Goran", 555);

$bankaIntesa = new Banka("Intesa San Paolo");
$bankaIntesa->dodajRacun("Goran Pobric", 555, 160 - 3232321 - 32);

dump($bankaIntesa);

dump($goran);

// var_dump($test->dodajRacun("Pera", -323232, "160-000-123"));
