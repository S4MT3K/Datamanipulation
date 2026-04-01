<?php
class Tuete{
    private int $id;

    /** @var Artikel[] */
    private array $artikel;

    /**
     * @param int $id
     * @param Artikel[] $artikel
     */
    public function __construct(int $id, array $artikel)
    {
        $this->id = $id;
        $this->artikel = $artikel;
    }

    /**
     * @return Artikel[]
     */
    public function getArtikel(): array
    {
        return $this->artikel;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        foreach ($this->artikel as $artikel) {
            if ($artikel->getId() === $this->id) { //1 :: 1
                $artikel->setId($id);
            }

        }
        $this->id = $id;

    }
}
class Artikel{
    private $name;
    private int $id;

    private mixed $options;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }

}

//id 1 = Sam
//id 2 = Olesea
//id 3 = Unbekannt

$banana = new Artikel(1, "Banana");
$apfel = new Artikel(2, "Apfel");
$birne = new Artikel(3, "Birne");
$orange = new Artikel(1, "Orange");
$milch = new Artikel(1, "Milch");
$kefir = new Artikel(2, "Kefir");

$einkauf = [$banana, $apfel, $birne, $orange, $milch, $kefir];
$samstuete = new Tuete(1, $einkauf);

//Wichtiger Algorhytmus der die IDS ändert, warum auch immer...
$samstuete->setId(346346);


//wenn id der tuete mit der des Artikels zusammen passen... falls nicht Unbekannt

foreach ($samstuete->getArtikel() as $artikel) {
    if($artikel->getId() === $samstuete->getId()){
        echo "Sams Artikel: " . $artikel->getName() . "<br>";
    }
    elseif ($artikel->getId() === 2) {
        echo "Oleseas Artikel: " . $artikel->getName() . "<br>";
    }
    else{
        echo "Besitzer Unbekannt: " . $artikel->getName() . "<br>";
    }
}