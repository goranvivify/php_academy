<?php

/*
Prema modelu baze iz https://docs.google.com/document/d/1ZdKN5TSUJtOUBF5g8RReG6HZ9wYSCR3LV00PBrWGHzE/edit napraviti klase User, Profile i Ad. 
Svuda gde se pojavljuje foreign key treba da postoji referenca na odgovarajući objekat (tamo gde je u bazi user_id u klasi treba da bude atribut user, itd.). 
Nije potrebno voditi računa o tipovima podataka u klasi. 

Svi atributi treba da budu private, osim:
 first_name i last_name na klasi Profile
 title na klasi Ad
Napisati sledeći scenario:

kreirati User objekat sa email-om marko@me.com i proizvoljnom preostalim podacima
kreirati Profile objekat sa first_name Marko, last_name Markovic, user objektom kreiranim u prethodnoj tacki, i proizvoljnim preostalim podacima
kreirati 3 proizvoljna Ad objekta za ovog korisnika
*/
function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}


class User
{

    private $id;
    private $email;
    private $password;

    public function __construct($id, $email, $password)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
    }
}

class Profile
{

    private $id;
    private $user;
    public $first_name;
    public $last_name;
    private $city;
    private $date_of_birth;
    private $phone;


    public function __construct($id, $user, $first_name, $last_name, $city, $date_of_birth, $phone)
    {
        $this->id = $id;
        $this->user = $user;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->city = $city;
        $this->date_of_birth = $date_of_birth;
        $this->phone = $phone;
    }
}

class Ad
{

    private $id;
    private $category;
    private $user;
    public $title;
    private $content;
    private $created_at;
    private $expire_on;


    public function __construct($id, $category, $user, $title, $content, $created_at, $expire_on)
    {
        $this->id = $id;
        $this->category = $category;
        $this->user = $user;
        $this->title = $title;
        $this->content = $content;
        $this->created_at = $created_at;
        $this->expire_on = $expire_on;
    }
}

$marko = new User(1, "marko@me.com", "test1234");
$marko_profil = new Profile(1, $marko, "Marko", "Markovic", "Novi Sad", "01-01-1982", "065-111-2222");

$marko_ad_1 = new Ad(1, "sport", 1, "Nike", "Nike commercial", date("Ymd"), 20221212);
$marko_ad_2 = new Ad(1, "fashion", 1, "Prada", "Prada commercial", date("Ymd"), 20221212);
$marko_ad_3 = new Ad(1, "house", 1, "Bosh", "Bosh commercial", date("Ymd"), 20221212);

// dump($marko);
dump($marko_profil);
// dump($marko_ad_1);
// dump($marko_ad_2);
// dump($marko_ad_3);
