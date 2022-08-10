<?php

class Book{
    private $title;
    private $price;

    public function __construct($new_title, $new_price){
        $this->title = $new_title;
        $this->price = $new_price;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getPrice(){
        return $this->price;
    }
}

?>