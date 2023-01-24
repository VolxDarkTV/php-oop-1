<?php
// CLASS
class Movie{
    public $title = "";
    public $protagonist = "";
    public $date = "";
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
        . "Date: " . $this->date . '</span>'
        . "<br><br>";
    }
}
// OBJECT
$movie1 = new Movie("Spider-Man: Homecoming", "Tom Holland", "2017");
$movie2 = new Movie("Il Gladiatore", "Russel Crowe", "2000");

// PRINT ON SCREEN
echo $movie1->getHTML(), $movie2->getHTML();
?>
