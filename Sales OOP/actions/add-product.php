<?php
    include "../classes/User.php";

    # COLLECT THE FORM DATA
    $product_name = $_POST['product'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    

    #CREATE AN OBJECT
    $product = new User;

    #CALL THE METHOD
    $product->AddProduct($product_name, $price, $quantity);
?>