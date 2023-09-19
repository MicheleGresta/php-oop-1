<?php   
include __DIR__ . "/Movies.php";


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

?>


<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>project</title>
  <!-- CUSTOM STYLE SHEET FILE LINK -->
  <link rel="stylesheet" href="./css/style.css">
  
  <!-- THIRD PARTY LIBRARIES -->
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- FONTAWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- STANDARD FAVICON TO AVOID CONSOLE ERRORS ON FIREFOX -->
  <link rel="icon"type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
  <!-- VUE CDN -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- LUXON CDN -->
  <script src="https://cdn.jsdelivr.net/npm/luxon@3.3.0/build/global/luxon.min.js"></script>
  <!-- AXIOS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
  
  <div class="container mt-5">
    <div class="row row-cols-4 gap-3">
        <?php
        foreach ($films as $film) {
            echo "<div class='col-2'>";
            echo "<div class='card d-flex justify-content-center h-100 p-4'>";
            echo "<h4>" . $film["Titolo"] . "</h4>";
            echo "<h5>" . $film["Genere"] . "</h5>";
            echo "<h5>" . $film["Anno"] . "</h5>";
            echo "</div>";
            echo "</div>";
        }

        ?>
    
        
    </div>
  </div>
  
  
  
  
  
<script src="./js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>