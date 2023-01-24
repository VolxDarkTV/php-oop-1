<?php
// CLASS
class Movie{
    public $title;
    public $protagonist;
    public $date;
    public function __construct($title, $protagonist, $date){
        $this->title = $title;
        $this->protagonist = $protagonist;
        $this->date = $date;
    }
    public function getHTML(){

        return '<span>' 
        . "Title: " . $this->title 
        . "<br>" 
        . "Protagonist: " . $this->protagonist
        . "<br>"
        . "Date: " . $this->date . '</span>';
    }
}

// OBJECT
$movies = [new Movie("Spider-Man: Homecoming", "Tom Holland", "2017"), new Movie("Il Gladiatore", "Russel Crowe", "2000"), new Movie("Lo Spartano", "Russel Crowe", "2008"), new Movie("Spider-Man: Far from Home", "Tom Holland", "2019"), new Movie("Il Gladiatore", "Russel Crowe", "2000"), new Movie("Lo Spartano", "Russel Crowe", "2008")];

// PRINT ON SCREEN
foreach($movies as $movie){
    echo "<br><br>";
    echo $movie->getHTML();
}


?>
