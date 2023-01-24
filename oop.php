<?php
// CLASS
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
class Genre{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
    public function getHTMLGenre(){
        return '<span>' 
        . "<br>" 
        . "Genre: " 
        . $this->name 
        . '</span>';
    }
}
// Genre
$genre1 = new Genre("Action");
$genre2 = new Genre("Fantasy");
// OBJECT
$movies = [
        new Movie("Spider-Man: Homecoming", "Tom Holland", "2017", $genre1), 
        new Movie("Spider-Man: Homecoming", "Tom Holland", "2017", $genre1), 
        new Movie("Il Gladiatore", "Russel Crow", "2000", $genre1)
    ];
// PRINT ON SCREEN
foreach($movies as $movie){
    echo "<br><br>";
    echo $movie->getHTML();
}
?>
