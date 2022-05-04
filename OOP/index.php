<?php

function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}


// class Person
// {
//     public $firstName;
//     public $lastName;
//     public $age;
//     private $id;

//     public function __construct($firstName, $lastName)
//     {
//         $this->firstName = $firstName;
//         $this->lastName = $lastName;
//     }

//     public function setId($newId)
//     {
//         $this->id = $newId;
//     }
// }

// $joe = new Person("Goran", "Pobric");
// $joe->name = "Goran";
// $joe->age = 39;
// $joe->setId(12345);
// dump($joe);


// class City
// {
//     public $name;
//     public $population;

//     public function __construct($name, $population)
//     {
//         $this->name = $name;
//         $this->population = $population;
//     }


// private function upperCase()
// {
//     return strtoupper($this->name);
// }

// public function getName()
// {
//     // echo "Method getName is called";
//     return $this->upperCase();
// }
// }

// $noviSad = new City("Novi Sad", 200000);
// $noviSad->name = "Novi Sad";
// $noviSad->population = 200000;
// echo $noviSad->getName();
// echo $noviSad->upperCase();
// dump($noviSad);


// 

// 

// class Macka
// {
//     public $ime;
//     public $majka;
//     public $otac;

//     public function __construct($ime, $majka = "nepoznata", $otac = "nepoznat")
//     {
//         $this->ime = $ime;
//         $this->majka = $majka;
//         $this->otac = $otac;
//     }

//     public function mjau()
//     {
//         echo "$ime kaze mjau";
//     }
// }

// $ljubimac = new Macka("Cvrle");



// dump($ljubimac);

class Pravougaonik
{
    private $a;
    private $b;
    private $d;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->d = sqrt($a * $a + $b * $b);
    }

    // private function izracunajD() {
    //     return 
    // }

    public function getAtt($att)
    {
        if ($att == "a") {
            return $this->a;
        } elseif ($att == "b") {
            return $this->b;
        } else {
            return $this->d;
        }
    }

    public function setAtt($att, $value)
    {
        if ($att == "a") {
            $this->a = $value;
        } else {
            $this->b = $value;
        }
    }
}

$result = new Pravougaonik(5, 3);

dump($result);

dump($result->getAtt("a"));
dump($result->getAtt("b"));
dump($result->getAtt("d"));

$result->setAtt("a", 333);
dump($result->getAtt("a"));

$result->setAtt("b", 333);
dump($result->getAtt("b"));

dump($result);


// public function getA()
//     {
//         return $this->a;
//     }

//     public function getB()
//     {
//         return $this->b;
//     }

//     public function getD()
//     {
//         return $this->d;
//     }
// public function setA($a)
// {
//     $this->a = $a;
// }

// public function setB($b)
// {
//     $this->b = $b;
// }

class PravougaonikNew
{
    private $a;
    private $b;
    private $d;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        $this->izracunajD();
    }

    private function izracunajD()
    {
        $this->d = sqrt($this->a * $this->a + $this->b * $this->b);
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getD()
    {
        return $this->d;
    }

    public function setA($noviA)
    {
        $this->a = $noviA;
        $this->izracunajD();
    }

    public function setB($noviB)
    {
        $this->b = $noviB;
        $this->izracunajD();
    }
}

$pravougaonik = new PravougaonikNew(4, 3);

echo "Stranica A je " . $pravougaonik->getA() . ", stranica B je " . $pravougaonik->getB() . ", dijagonala je " . $pravougaonik->getD() . "<br/>";

$pravougaonik->setA(8);
$pravougaonik->setB(6);

echo "Stranica A je " . $pravougaonik->getA() . ", stranica B je " . $pravougaonik->getB() . ", dijagonala je " . $pravougaonik->getD() . "<br/>";
