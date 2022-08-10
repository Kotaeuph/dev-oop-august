<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <label for="title">Title:</label>
        <input type="text" name="title" id="title">

        <br>

        <label for="price">Price:</label>
        <input type="text" name="price" id="price">

        <br>

        <button type="submit" name="btn_submit">Submit</button>



    </form>

    <?php
    include "Book-Constructor.php";

    if(isset($_POST['btn_submit'])){
        $book = new Book($_POST['title'], $_POST['price']);

        echo "TITLE: " . $book->getTitle() . "<br>";
        echo "PRICE: " . $book->getPrice() . "<br>";
    }

    ?>
</body>
</html>