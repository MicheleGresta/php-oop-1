<?php

function printHTML($film)
    {
    ?>

        <div class="col-2">
            <div class="card d-flex justify-content-center h-100 p-4">
                <h4>Titolo: <?php echo $film["Titolo"]  ?> </h4>
                <h5>Genere: <?php echo $film["Genere"]  ?></h5>
                <h5>Anno d'uscita: <?php echo $film["Anno"]  ?></h5>
            </div>
        </div>


    

      <?php
    }

    
//inutile ma..
class Movie
{
    public $titolo;
    public $genere;
    public $anno;


    public function __construct($_titolo, $_genere, $_anno)

    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->anno = $_anno;
    }

    public function echoFilm()
    {
        echo "Titolo " . $this->titolo . "<br>";
        echo "Genere " . $this->genere . "<br>";
        echo "Anno " . $this->anno . "<br>";
    }




    
    
}
