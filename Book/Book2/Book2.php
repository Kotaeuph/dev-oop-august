<?php

class Book{

    private $title;
    private $price;
    public $author;

    // public function setTitle($new_title){
    //     $this->title = $new_title;
    // }

    // public function setPrice($new_price){
    //     $this->price = $new_price;
    // }

    //single setter
    public function setValues($new_title, $new_price){
        $this->title = $new_title;
        $this->price = $new_price;
    }

    //multiple getters
    public function getTitle(){
        return $this->title;
    }

    public function getPrice(){
        return $this->price;
    }

    //display method//
    public function displayAuthor(){
        return $this->author;
    }

    private function displayValues(){
        echo "AUHTOR" . $this->author . "<br>";
        echo "TITLE" . $this->title . "<br>";
    }
}

// //Instantiation of a class//
// $web_development = new Book;
// $web_design = new Book;

// //Accessing a public property
// $web_development->author = "John Smith";
// echo $web_development->displayAuthor(). "<br>";

// //accessing a public method
// // $web_development->setTitle("Web Development");
// // $web_development->setPrice("$50");
// $web_development->setValues("Web Development", "50");
// echo $web_development->getTitle(). "<br>";
// echo $web_development->getPrice(). "<br>";


// //accessing a private property
// // $web_design->title = "Web Design";

// //accessing a private method
// // echo $web_design->displayValues(). "<br>"; // Error cannot access private method


?>