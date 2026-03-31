<?php
include "Class/Person.php";
include "Class/Car.php";
include "Class/Book.php";
$person = Person::makePerson("sam", 24, "@.de");
$car = Car::makeCar("BMW", "Coupè", 2008);
$book = Book::makeBook("Sammy", "ääääh");
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

try {
printBookInfo($book);

}
catch (Error $e)
{
    if (preg_match('/.*\s+undefined\s+method.*/i', $e->getMessage())) {
        preg_match('/(?<=::)[a-zA-Z_][a-zA-Z0-9_]*(?=\()/', $e->getMessage(), $matches);
        $methodName = $matches[0] ?? null;
        echo '
    <div style="
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #e74c3c;
        border-left: 6px solid #e74c3c;
        background-color: #fdecea;
        color: #b03a2e;
        font-family: Arial, sans-serif;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    ">
        <h3 style="margin-top: 0;">Fehler aufgetreten</h3>
        <p style="margin: 0;">' . htmlspecialchars("Es gibt keine Methode $methodName in diesem Objekt.") . '</p>
    </div>';
    }
    if (preg_match('/.*\s+accessed\s+before.*/i', $e->getMessage())) {
        #preg_match('/(?<=::)[a-zA-Z_][a-zA-Z0-9_]*(?=\()/', $e->getMessage(), $matches);
        $methodName = $matches[0] ?? null;
        echo '
    <div style="
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #e74c3c;
        border-left: 6px solid #e74c3c;
        background-color: #fdecea;
        color: #b03a2e;
        font-family: Arial, sans-serif;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    ">
        <h3 style="margin-top: 0;">Fehler aufgetreten</h3>
        <p style="margin: 0;">' . htmlspecialchars("Eine Variable muss Initialisiert sein bevor sie benutzt wird.") . '</p>
    </div>';
    }
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