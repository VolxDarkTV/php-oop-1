<?php
class LanguageFilm {
    public $language = "";

    public function __construct($language){
        $this->language = $language;
    }
    public function getHello(){
        echo "hello world";
    }
}

$lnguage1 = new LanguageFilm("Italian");

?>