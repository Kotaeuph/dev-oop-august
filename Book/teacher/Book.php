<?php

    class Book{
        # PROPERTIES
        private $title;
        private $price;
        // public $author;

        # METHODS
        // MULTIPLE SETTERS
        // public function setTitle($new_title){
        //     $this->title = $new_title;
        // }

        // public function setPrice($new_price){
        //     $this->price = $new_price;
        // }

        // SINGLE SETTER
        public function setValues($new_title, $new_price){
            $this->title = $new_title;
            $this->price = $new_price;
        }

        // MULTIPLE GETTERS
        public function getTitle(){
            return $this->title;
        }

        public function getPrice(){
            return $this->price;
        }

        // DISPLAY METHODS
        public function displayAuthor(){
            return $this->author;
        }

        private function displayValues(){
            echo "AUTHOR: " . $this->author . "<br>";
            echo "TITLE: " . $this->title . "<br>";
        }

    }

    // /*** INSTANTIATION OF A CLASS (OBJECT) ***/
    // $web_development = new Book;
    // $web_design      = new Book;

    // # ACCESSING A PUBLIC PROPERTY
    // $web_development->author = "John Smith"; // OK: author is a public property
    // echo $web_development->displayAuthor() . "<br>";

    // # ACCESSING A PUBLIC METHOD
    // // $web_development->setTitle("Web Development");
    // // $web_development->setPrice("$50");
    // $web_development->setValues("Web Development", "$50");
    // echo $web_development->getTitle() . "<br>";
    // echo $web_development->getPrice() . "<br>";


    // # ACCESSING A PRIVATE PROPERTY
    // //$web_design->title = "Web Design"; // ERROR: Cannot access private property

    // # ACCESSING A PRIVATE METHOD
    // //echo $web_design->displayValues() . "<br>"; // ERROR: Cannot access private method
?>