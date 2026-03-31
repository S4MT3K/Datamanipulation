<?php
//Aufgabe 3
//
//Erstelle eine Klasse Book mit:
//
//public string $title
//protected string $author
//private float $price
//
//Aufgabe:
//
//Lege ein Objekt an
//Weise allen Properties sinnvolle Werte zu
//Gib die Werte formatiert untereinander aus

class Book
{
    public string $title;
    protected string $author;
    private string $price;

    private function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    public static function makeBook(string $title, string $author) : self
    {
        return new self($title, $author);
    }
}