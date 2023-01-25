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

        return '<span class="movie_style">' 
        . "<h4>" . "Title: " . $this->title . "</h4>"
        . "<br>" 
        . "Protagonist: " . $this->protagonist
        . "<br>"
        . "Date: " . $this->date . $this->genre->getHTMLGenre() 
        . '</span>';
    }
}
?>