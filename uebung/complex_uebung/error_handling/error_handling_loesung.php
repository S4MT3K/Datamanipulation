<?php
//AUFGABE: Schreibt Exception und Error Handling in schönes HTML...
//Werft eigene Fehler und behandelt mögliche Fehler.
//ich will keine "standard" Fehlermeldungen mehr sehen.

class UserService
{
    public function getUserById(int $id) : string
    {
        $users = //Fake DB (Normalerweise aus einem HTTP/s fetch
        [
            1 => "Max",
            2 => "Anna"
        ];

        if(!array_key_exists($id, $users)){
            throw new Exception("User with id {$id} not found");
        }
        return $users[$id];
    }
}
function divide(float $a, float $b)
{
    if($b === 0.0 || $b === 0)
    {
        throw new Exception("Division by zero");
    }
    return $a / $b;
}


try{
    if (!isset($_GET['id'], $_GET['divider']))
    {
        throw new Exception('Parameters Missing [$_GET["id"] OR $_GET["divider"] not set.');
    }
    $userService = new UserService();

    echo "User: " . $userService->getUserById($_GET['id']);
    echo "<br>";

    $result = divide(10, $_GET['divider']);
    echo "Result: " . $result;
}
catch(Exception $e)
{
    errorChecker($e);
}

function errorChecker($e)
{
    if (str_contains($e->getMessage(), "User with"))
    {
        echo "Samma, Du weest schon datt et im Array nur zwe users jibt, ja?";
    }
    if(str_contains($e->getMessage(), "Division by zero")){
        echo "Also Mathe is nicht so dein ding, wa?";
    }
    if(str_contains($e->getMessage(), "not set")){
        echo "Da sind wohl einige Superglobale variablen nicht gefüllt worden.";
    }
}



