<?php
include "UserService.php";
include "CustomErrorHandler.php";
//AUFGABE: Schreibt Exception und Error Handling in schönes HTML...
//Werft eigene Fehler und behandelt mögliche Fehler.
//ich will keine "standard" Fehlermeldungen mehr sehen.
#$_GET['id'] = 2;
#$_GET['divider'] = 2;
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
    //return new CustomError
    //errorChecker($e);
    CustomErrorHandler::handleError($e);
}





