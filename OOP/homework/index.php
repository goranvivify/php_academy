<?php

function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}


abstract class Osoba
{
   public $ime;
   public $prezime;

   public function __construct(string $ime, string $prezime)
   {
       $this->ime = $ime;
       $this->prezime = $prezime;
   }
}

class Doktor extends Osoba
{
   public $specijalnost;

   public function __construct(string $ime, string $prezime, string $specijalnost)
   {
       parent::__construct($ime, $prezime);
       $this->specijalnost = $specijalnost;
       Loger::logujKreiranjeDoktora($this);
   }

   public function zakaziPregled(Pregled $pregled)
   {
       echo "Zakazan je pregled $pregled->tip za pacijenta {$pregled->pacijent->ime} {$pregled->pacijent->prezime} kod doktora $this->prezime <br/>";
   }
}

class Pacijent extends Osoba
{
   public $jmbg;
   public $brojKartona;
   public $doktor;

   public function __construct(string $ime, string $prezime, string $jmbg, string $brojKartona)
   {
       parent::__construct($ime, $prezime);
       $this->jmbg = $jmbg;
       $this->brojKartona = $brojKartona;
       Loger::logujKreiranjePacijenta($this);
   }

   public function izaberiLekara(Doktor $doktor)
   {
       $this->doktor = $doktor;
       Loger::logujBiranjeLekara($this, $doktor);
   }
}

abstract class Pregled
{
   public $datum;
   public $vreme;
   public $pacijent;
   public $tip;

   public function __construct(string $datum, string $vreme, Pacijent $pacijent, string $tip)
   {
       $this->datum = $datum;
       $this->vreme = $vreme;
       $this->pacijent = $pacijent;
       $this->tip = $tip;
   }

   public abstract function obaviPregled();
}

class PregledKrvniPritisak extends Pregled
{
   public $gornjaVrednost;
   public $donjaVrednost;
   public $puls;

   public function __construct(string $datum, string $vreme, Pacijent $pacijent)
   {
       parent::__construct($datum, $vreme, $pacijent, 'krvni pritisak');
   }

   public function obaviPregled()
   {
    Loger::logujObavljanjePregleda($this);
       echo "Obavi pregled krvog pritiska za pacijenta {$this->pacijent->ime} {$this->pacijent->prezime} <br/>";

       $this->gornjaVrednost = 120;
       $this->donjaVrednost = 80;
       $this->puls = 60;

       echo "Rezultati pregleda: pritisak je {$this->gornjaVrednost}/{$this->donjaVrednost}, puls je $this->puls <br/>";

   }
}

class PregledNivoSecera extends Pregled
{
   public $vrednost;
   public $vremePoslednjegObroka;

   public function __construct(string $datum, string $vreme, Pacijent $pacijent)
   {
       parent::__construct($datum, $vreme, $pacijent, 'nivo secera');
   }

   public function obaviPregled()
   {
    Loger::logujObavljanjePregleda($this);
       echo "Obavi pregled nivoa secera u krvi za pacijenta {$this->pacijent->ime} {$this->pacijent->prezime} <br/>";

       $this->vrednost = 40;
       $this->vremePoslednjegObroka = '08:56';

       echo "Rezultati pregleda: vrednost $this->vrednost, vreme poslednjeg obroka $this->vremePoslednjegObroka <br/>";

   }
}

class PregledHolesterol extends Pregled
{
   public $vrednost;
   public $vremePoslednjegObroka;

   public function __construct(string $datum, string $vreme, Pacijent $pacijent)
   {
       parent::__construct($datum, $vreme, $pacijent, 'nivo holesterola');
   }

   public function obaviPregled()
   {
    Loger::logujObavljanjePregleda($this);
       echo "Obavi pregled holesterola za pacijenta {$this->pacijent->ime} {$this->pacijent->prezime} <br/>";

       $this->vrednost = 40;
       $this->vremePoslednjegObroka = '08:56';

       echo "Rezultati pregleda: vrednost $this->vrednost, vreme poslednjeg obroka $this->vremePoslednjegObroka <br/>";

   }
}

class Loger {
    

    public static function logujKreiranjeDoktora(Doktor $doktor) {
        $dateLog = (new DateTime())->format('d.m.Y H:i');
        echo "[$dateLog] Novi doktor $doktor->ime je dodat u listu - log <br>";
    }

    public static function logujKreiranjePacijenta(Pacijent $pacijent) {
        $dateLog = (new DateTime())->format('d.m.Y H:i');
        echo "[$dateLog] Pacijent $pacijent->ime je dodat na listu - log <br>";
    }

    public static function logujBiranjeLekara(Pacijent $pacijent, Doktor $doktor) {
        $dateLog = (new DateTime())->format('d.m.Y H:i');
        echo "[$dateLog] Pacijent $pacijent->ime je izabrao doktora $doktor->ime - log <br>";
    }

    public static function logujObavljanjePregleda(Pregled $pregled) {
        $dateLog = (new DateTime())->format('d.m.Y H:i');
        echo "[$dateLog] Pacijent {$pregled->pacijent->ime} {$pregled->pacijent->prezime} je obavio pregled $pregled->tip, dana $pregled->datum u $pregled->vreme sati, kod doktora {$pregled->pacijent->doktor->ime} {$pregled->pacijent->doktor->prezime}";
    }
}


$docMilan = new Doktor('Milan', 'Milanovic', 'kardiolog');
$docGoran = new Doktor("Pera", "Peric", "oftamolog");
$pacDragan = new Pacijent('Dragan', 'Jovanovic', '023342323', '0005677');
$pacSinisa = new Pacijent("Sinisa", "Milovanovic", "01019828000091", "0002409");

$pacDragan->izaberiLekara($docMilan);

$pregled1 = new PregledNivoSecera('12-12-2017', '08:00', $pacDragan);
$docMilan->zakaziPregled($pregled1);
$pregled2 = new PregledKrvniPritisak('12-12-2017', '08:15', $pacDragan);
$docMilan->zakaziPregled($pregled2);

$pregled1->obaviPregled();
$pregled2->obaviPregled();


// Loger::logujKreiranjeDoktora($docGoran);
// Loger::logujKreiranjePacijenta($pacSinisa);
// Loger::logujBiranjeLekara($pacSinisa, $docGoran);
// Loger::logujObavljanjePregleda($pregled2);





/*
(Nastavak na prethodni zadatak)
Napraviti klasu Loger, sa statickim metodama:
logujKreiranjeDoktora(Doktor $doktor)
logujKreiranjePacijenta(Pacijent $pacijent)
logujBiranjeLekara(Pacijent $pacijent, Doktor $doktor)
logujObavljanjePregleda(LaboratorijskiPregled $pregled)
Dodati logovanje akcija u sistemu (logovanje neka samo radi ispis). Akcije logovati u formatu [datum vreme] [akcija]. Primer jedne linije loga:
[20.03.2013 19:30] Pacijent “Milan” izvrsio je laboratorijski pregled nivoa holesterola u krvi.
Akcije koje treba da se loguju su:
kreiranje doktora
kreiranje pacijenta
pacijent bira doktora
obavljanje laboratorijskog pregleda
Datum se može dobiti pomoću:	(new DateTime())->format('d.m.Y H:i')
*/