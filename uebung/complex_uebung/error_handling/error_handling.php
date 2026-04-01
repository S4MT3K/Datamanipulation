<?php
//finde hier die 3 möglichen fehler. Benenne sie
class UserService
{
    public function getUserById($id)
    {
        //KEIN TYPCHECK 1. FEHLER
        if ($id == null) { // man kann für falsy werte auch !$id nehmen also die id negieren

//            0 == null // true
//            "" == null // true
//            false == null // true
//            [] == null // true

//            0 === null // false
//            "" === null // false
//            false === null // false
//            [] === null // false
//            null === null // true
            throw new Exception("ID darf nicht leer sein");
        }

        // INDEX HANDLING NICHT SAUBER (WAS WENN ID = 0) A: id 0 wird über == null behandelt
        // SIMULIERTE DATENBANK (BLEIBEN IMMER 2 USER) SOWASS KOMMT NICHT IN EINE KLASSE
        //          NIEMALS
        //          ERNSTHAFT
        //          NEIN!!!!
        $users = [
            1 => "Max",
            2 => "Anna"
        ];
        // UNDEFINED INDEX IST MÖGLICH 3. FEHLER
        return $users[$id];
    }
}

//$newUser = new UserService();
//echo $newUser->getUserById(0);

//Findet 1 möglichen Fehler
function divide($a, $b)
{
    //eine division durch 0 ist möglich [man kann nicht durch null teilen]
    return $a / $b;
}

//echo divide(2, 0);


//Nennt mir eine Verbesserungsmöglichkeit bzw. einen möglichen Fehler
$userService = new UserService();

echo "User: " . $userService->getUserById($_GET['id']); //Wir wissen nicht ob $_GET überhaupt gesetzt ist.
echo "<br>";

$result = divide(10, $_GET['divider']); //auch hier... ist gesetzt?
echo "Result: " . $result;


//AUFGABE: Schreibt Exception und Error Handling in schönes HTML...
//Werft eigene Fehler und behandelt mögliche Fehler.
//ich will keine "standard" Fehlermeldungen mehr sehen.

