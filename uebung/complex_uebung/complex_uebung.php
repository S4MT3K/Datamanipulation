<?php
include "Class/Person.php";
include "Class/Car.php";
include "Class/Book.php";
#$person = Person::makePerson("sam", 24, "@.de"); //static methode zum erstellen eines Objektes (inkl. wrapper [einsehbar in klasse])
$person2 = new Person(); //erstellen ohne Construktor und ohne wrapper
$person2->setSetters(24, "@.de", "sam"); //Art, wie man ein Objekt noch zusammenbauen kann (siehe BaseClass)
#var_dump($person2);


$car = Car::makeCar("BMW", "Coupè", 2008);
$book = Book::makeBook("Sammy", "ääääh");
function printBookInfo($book)
{
    if(true)
    {
        throw new Error("Ich brauch Urlaub");
    }
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
printBookInfo($car);

}
catch (Error $e)
{
    var_dump($e); //ausgeben des fehlers... was ist drin?
    if (preg_match('/.*\s+undefined\s+method.*/i', $e->getMessage())) { //undefinierte methode via Regular Expressions erkennen und Fachlich ausgeben..
        preg_match('/(?<=::)[a-zA-Z_][a-zA-Z0-9_]*(?=\()/', $e->getMessage(), $matches); //Filtern der message nach besonderem Schema (Chat-GPT)
        $methodName = $matches[0] ?? null; //wenn du was gefunden hast, nimm es, ansonsten NULL es
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
        <p style="margin: 0;">' . htmlspecialchars("Es gibt keine Methode $methodName in diesem Objekt.") . '</p> <!-- Macht aus HTML-Zeichen sicheren Text. → verhindert z. B. XSS (Script-Injection) -->
    </div>';
    }
    if (preg_match('/.*\s+accessed\s+before.*/i', $e->getMessage())) { //regular expression zum finden von erwarteten fehlern..
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

//Aufgabe 3^//NICHT GEMACHT (BONUS)
//
//Baue eine Klasse User mit einer private string $password.
//
//Aufgabe:
//
//Erstelle einen Getter
//Greife auf das Passwort zu, ohne es vorher zu setzen
//Fange den Fehler ab
//Zeige ihn in einer roten HTML-Box an