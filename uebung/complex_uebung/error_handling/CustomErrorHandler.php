<?php
class CustomErrorHandler{
    private Error|Exception $error; //TODO: Chef if neccessary
    private Exception $exception; //TODO: Chef if neccessary

    public static function handleError(Throwable $throwable) : void
    {
        if ($throwable instanceof Error) {
            throwErrorMessage($throwable->getMessage(), "Error");
        }
        if ($throwable instanceof Exception) {
            throwErrorMessage($throwable->getMessage(), "Exception");
        }
        var_dump($throwable);
    }
}


function throwErrorMessage($e, $type)
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