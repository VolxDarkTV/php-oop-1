<?php
class Movie{
    public $title;
    public $protagonist;
    public $date;
    public $genre;
    public function __construct($title, $protagonist, $date, $genre){
        $this->title = $title;
        $this->protagonist = $protagonist;
        $this->date = $date;
        $this->genre = $genre;
    }
    public function getHTML(){

        return '<span>' 
        . "Title: " . $this->title 
        . "<br>" 
        . "Protagonist: " . $this->protagonist
        . "<br>"
        . "Date: " . $this->date . $this->genre->getHTMLGenre() 
        . '</span>';
    }
}
?>