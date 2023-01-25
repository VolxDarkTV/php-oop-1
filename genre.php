<?php
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
?>