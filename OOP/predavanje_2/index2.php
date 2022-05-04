<?php

/*
Modelirati jednostavnu mobilnu mrežu:
Napraviti klasu SimKartica koja sadrži jedan atribut, brojTelefona (private), koji se setuje prilikom instanciranja objekta.

Napraviti klasu MobilnaMreza koja sadrzi ime (public, postavlja se prilikom kreiranja), i niz sim kartica sa nazivom sveSimKartice (private). Napisati metodu novaSimKartica koja kreira objekat klase SimKartica i dodaje je u niz sveSimKartice.

U klasu SimKartica dodati novi private atribut mreza, i novu public metodu postaviMrezu koja prima parametar novaMreza i postavlja ga u atribut mreza

Proširiti metodu novaSimKartica da nakon kreiranja objekta postavlja i mrežu pozivom metode  nad novokreiranim objektom. Mreža je u tom slučaju ceo objekat klase MobilnaMreza, ne samo ime mreže.
*/
function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

class SimKartica
{

    private $brojTelefona;
    private $mreza;

    public function __construct($brojTelefona)
    {
        $this->brojTelefona = $brojTelefona;
    }

    public function postaviMrezu($novaMreza)
    {
        $this->mreza = $novaMreza;
    }
}

class MobilnaMreza
{

    public $ime;
    private $sveSimKartice = [];

    public function __construct($ime)
    {
        $this->ime = $ime;
    }

    public function novaSimKartica($noviBroj)
    {
        $novaSimKart = new SimKartica($noviBroj);
        $novaSimKart->postaviMrezu($this->ime);
        $this->sveSimKartice[] = $novaSimKart;
    }
}

$yettel = new MobilnaMreza("YETTEL");
$yettel->novaSimKartica(777888999);
$yettel->novaSimKartica(454645665656);

dump($yettel);

$a1 = new MobilnaMreza("A1");
$a1->novaSimKartica(4434345254266253626435);
$a1->novaSimKartica(2222);
$a1->novaSimKartica(3343423);

dump($a1);
