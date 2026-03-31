<?php
include "Class/Person.php";
include "Class/Car.php";
include "Class/Book.php";
$person = Person::makePerson("sam", 24, "@.de");
$car = Car::makeCar("BMW", "Coupè", 2008);
$book = Book::makeBook("Sammy", "ääääh", 1231);
function printBookInfo($book)
{
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
}

printBookInfo($book);
try {
printBookInfo($car);

}
catch (Error $error)
{
    echo $error->getMessage();
}


//Error Handling
//Aufgabe 1
//
//Nimm eine Klasse mit typisierten Properties und lasse absichtlich eine Property uninitialisiert.
//
//Aufgabe:
//
//Greife auf diese Property zu
//Fange den Fehler mit try / catch (Error $e) ab
//Gib eine schöne HTML-Fehlermeldung aus
//Aufgabe 2
//
//Erweitere dein Error Handling so, dass mit preg_match() geprüft wird, ob die Fehlermeldung den Text enthält:
//
//must not be accessed before initialization
//
//Aufgabe:
//
//Bei Treffer: eigene verständliche Meldung ausgeben
//Sonst: originale Fehlermeldung ausgeben
//Aufgabe 3
//
//Baue eine Klasse User mit einer private string $password.
//
//Aufgabe:
//
//Erstelle einen Getter
//Greife auf das Passwort zu, ohne es vorher zu setzen
//Fange den Fehler ab
//Zeige ihn in einer roten HTML-Box an