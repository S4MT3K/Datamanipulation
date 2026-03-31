<?php
//Datenmanipulation von Objekten
//Erstellen einer Klasse
class myObjectClass {
    public string $property_public;
    protected string $property_protected;
    private string $property_private;

    public function getPropertyProtected(): string
    {
        return $this->property_protected;
    }

    public function setPropertyProtected(string $property_protected): void
    {
        $this->property_protected = $property_protected;
    }

    public function getPropertyPrivate(): string
    {
        return $this->property_private;
    }

    public function setPropertyPrivate(string $property_private): void
    {
        $this->property_private = $property_private;
    }


}
//erzeugen eines Objektes
$myObj = new myObjectClass();

//1.Schritt Public DIREKT SETZEN
#$myObj->property_public = "Hello World From Public";
//2.Schritt Protected und private via Setter Setzen
$myObj->setPropertyProtected("Hello World From Protected");
$myObj->setPropertyPrivate("Hello World From Private");
//Versucht sicherzustellen, dass alle properties initialisiert sind

//Versuch, alle properties mit echo (da string) auszugeben.
try {
    echo $myObj->property_public; //DIREKTEN ZUGRIFF, WEIL PUBLIC
    echo "<br>";
    echo $myObj->getPropertyProtected(); //Ausgabe der Geschützten Property via Getter.
    echo "<br>";
    echo $myObj->getPropertyPrivate(); //Ausgabe der Privaten Property via Getter.
}
catch (Error $e) {

    if (preg_match('/.*must\s+not\s+be\s+accessed\s+before\s+initialization.*/i', $e->getMessage())) {
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
        <p style="margin: 0;">' . htmlspecialchars("Eine variable war nicht Initialisiert, überprüfe den Code.") . '</p>
    </div>';
    }
}

