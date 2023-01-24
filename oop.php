<?php
// Classe
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

        return '<h4>' 
        . "Title: " . $this->title 
        . "<br>" 
        . "Protagonist: " . $this->protagonist
        . "<br>"
        . "Date: " . $this->date . '</h4>';
    }
}
// OGGETTI
$movie1 = new Movie("Homecoming", "Holland", "2018");
// $spiderman -> title = "Homecoming";

echo $movie1->getHTML();
?>
