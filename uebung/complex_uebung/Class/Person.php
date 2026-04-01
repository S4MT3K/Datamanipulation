<?php
//AUFGABE
//Datenmanipulation
//Aufgabe 1
//
//Erstelle eine Klasse Person mit folgenden Properties:
//
//public string $name
//protected int $age
//private string $email
//
//Baue passende Getter und Setter für age und email.
//
//Aufgabe:
//
//Erzeuge ein Objekt
//Setze alle Werte
//Gib alle Werte aus
class Person
{
    public string $name;
    protected int $age;
    private string $email;
//    public function __construct(string $name, int $age, string $email) //Auskommentiert, um zu zeigen, wie man Objekte noch bauen kann (zu sehen in complex_uebung.php
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->email = $email;
//    }
    public function setname(string $name)
    {
        $this->name = $name;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function setSetters($age, $email, $name) //öffentliche methode, die ein Objekt, welches OHNE Konstruktor und somit OHNE initialisierte Attribute/properties/member erstellt wurde
                                                    // anspricht, und ihre attribute mit übergebenen parametern füllt
    {
        $this->setAge($age);
        $this->setEmail($email);
        $this->setname($name);
    }

    //Klassenwrapper für New Person
//    public static function makePerson(string $name, int $age, string $email) : self //Auskommentiert, um zu zeigen, wie man Objekte noch bauen kann (zu sehen in complex_uebung.php
//    {
//        return new self($name, $age, $email);
//    }

}