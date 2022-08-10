<?php

include "../classes/User.php";

$user_id = $_GET['user_id'];
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];



$user = new User;
$user->updateProduct($user_id, $product_name, $price, $quantity);

?>