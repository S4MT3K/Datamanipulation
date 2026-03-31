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
class Person {
public string $name;
protected int $age;
private string $email;

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
}
$person = new Person();
$person->name= "Sam";
$person->setAge(37);
$person->setEmail("s.bandoly@bbq.de");

echo $person->name;
echo "<br>";
echo $person->getAge();
echo "<br>";
echo $person->getEmail();
echo "<br>";


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
class Car{
    public string $brand = "BMW";
    protected string $model;
    private int $year;

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
}

echo "<br>";
$car = new Car();
$car->brand = "XXX";
echo $car->brand;
echo "<br>";
$car->setModel("Coupè");
echo $car->getModel();
echo "<br>";
$car->setYear(2000);
echo $car->getYear();


echo "<br>";
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

class Book{
    public string $title;
    protected string $author;
    private string $price;

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
}

echo "<br>";
$book = new Book();
$book->setTitle("Sam");
$book->setAuthor("Sammy");
$book->setPrice(2000);

echo "<table border='1'>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
       
    </tr>
    <tr>
        <th>{$book->getTitle()}</th>
        <th>{$book->getAuthor()}</th>
        <th>{$book->getPrice()}</th>
    </tr>
</table>";