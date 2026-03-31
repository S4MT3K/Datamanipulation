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
    private function __construct(string $name, int $age, string $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
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
    //Klassenwrapper für New Person
    public static function makePerson(string $name, int $age, string $email) : self
    {
        return new self($name, $age, $email);
    }
}