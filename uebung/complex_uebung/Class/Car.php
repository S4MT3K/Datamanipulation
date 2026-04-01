<?php
//Aufgabe 2
//
//Erstelle eine Klasse Car mit:
//
//public string $brand
//protected string $model
//private int $year
//
//Aufgabe:
//
//Setze brand direkt
//Setze model und year über Setter
//Gib alles mit echo aus
class Car
{
    public string $brand = "BMW";
    protected string $model;
    private int $year;

    private function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }
    public static function makeCar(string $brand, string $model, int $year) : self// Wrapper als Statische Methode der den privatisierten Constructor aufruft und die
                                                                                    // variablen übergibt damit das Objekt erzeugt werden kann.
    {
        return new self($brand, $model, $year);
    }
}