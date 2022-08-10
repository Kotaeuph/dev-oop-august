<?php

//One php file has only one class.

// class Book{
//     //properties (variables)
//     // global variables
//     $book_title = 'Math';
//     $author = '';

//     //methods (functions)
//     function displayAuthor(){
//         $message = "Hello"; //local variable
//         echo $message . $author;
//     }

//     function displayBook_id(){
//         $message = "Hi";
//         echo $book_title;
//         echo $message; // different from $message in displayAuthor
//     }

// }

class Book{
    //properties (variables)
    // global variables
    //visibility or access modifier, public/private/protected

    private $book_title = '';
    private $author = '';

    //methods (functions)
    public function setAuthor($author){  //local variable, apparrently same variable but different use
        $this->author = $author; //$this は class Book のこと        
    }

    //($author)が右項に行く。（外からvariableを定める）そして、$this->authorはprivate $authorに行く。
    //$this->authorはclassの$author(global variable)を指定している。function内はlocalのため。

    public function displayAuthor(){
        echo $this->author;
    }

    public function setBookTitle($book_title){
        $this->book_title = $book_title;
    }

    public function displayBook_title(){
        echo $this->book_title;     
    }

}

//instantiate 

$book_1 = new Book; //this is object of class Book.
// $book_1->author = "Math teacher"; this won't work because of 'private'.
$book_1->setAuthor('Charles Darwin');
$book_1->displayAuthor();
echo "<br>";
$book_1->setBookTitle('Teory of Evolution');
$book_1->displayBook_title();

$book_2 = new Book;
$book_2->serAuthor('nothing');
$book_2->displayAuthor();

// echo $book_1->author;
// echo $book_1->book_title;



?>

() = function and argument
[] = array
{} = block of code