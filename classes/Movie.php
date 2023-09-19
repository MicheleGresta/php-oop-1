<?php   



class Movie {
    public $titolo;
    public $genere;
    public $anno;


    public function __construct($_titolo,$_genere,$_anno)
    // funzione per creare un nuovo Movie
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->anno = $_anno;
    }

    public function echoFilm() {
        echo "Titolo " . $this->titolo . "<br>";
        echo "Genere " . $this->genere . "<br>";
        echo "Anno " . $this->anno . "<br>";
    }

}


