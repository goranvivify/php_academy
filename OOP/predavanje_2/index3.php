<?php

/*
Modelirati košarkaški klub

napraviti klasu Grad koja ima atribut ime (public). Prilikom kreiranja objekta ove klase postavlja se i atribut ime

napraviti klasu Igrac koja ima atribute ime, prezime i pozicija. Sva tri atributa su public i postavljaju se prilikom kreiranja objekta preko konstruktora

napraviti klasu Klub koja ima atribute ime, grad, datum_osnivanja i igraci (niz). Ime, grad i datum osnivanja se postavljaju prilikom kreiranja objekta

u klasu Klub dodati metodu dodajIgraca koja će kao ulazni argument primati objekat klase Igrac i koja će dodati novog igrača u niz igrača

Implementirati scenario

kreirati objekat klase Grad sa imenom Sakramento
napraviti objekat klase Klub koji se zove Kings, osnovan je 1951. i nalazi se u gradu Sakramento
kreirati nekoliko igraca klase Igrac, i dodati ih u klub Kings
*/
function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

class Grad
{

    public $ime;

    public function __construct($ime)
    {
        $this->ime = $ime;
    }
}

class Igrac
{

    public $ime;
    public $prezime;
    public $pozicija;


    public function __construct($ime, $prezime, $pozicija)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->pozicija = $pozicija;
    }
}

class Klub
{

    public $ime;
    public $grad;
    public $datum_osnivanja;
    public $igraci = [];


    public function __construct($ime, $grad, $datum_osnivanja)
    {
        $this->ime = $ime;
        $this->grad = $grad;
        $this->datum_osnivanja = $datum_osnivanja;
    }

    public function dodajIgraca($ime, $prezime, $pozicija)
    {
        $noviIgrac = new Igrac($ime, $prezime, $pozicija);
        $this->igraci[] = $noviIgrac;
    }
}


$sakramento = new Grad("Sakramento");
$sakramentoKlub = new Klub("Kings", $sakramento, 1951);

$teodosic = new Igrac("Milos", "Teodosic", "plej");
$sakramentoKlub->dodajIgraca($teodosic->ime, $teodosic->prezime, $teodosic->pozicija);

$bogdanovic = new Igrac("Bogdan", "Bogdanovic", "bek");
$sakramentoKlub->dodajIgraca($bogdanovic->ime, $bogdanovic->prezime, $bogdanovic->pozicija);

$kalinic = new Igrac("Nikola", "Kalinic", "krilo");
$sakramentoKlub->dodajIgraca($kalinic->ime, $kalinic->prezime, $kalinic->pozicija);



dump($sakramentoKlub);
