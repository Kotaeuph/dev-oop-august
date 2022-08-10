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
        <label for="kilometer">The distance traveled</label>
        <input type="number" name="kilometer" id="kilometer">

        <br>

        <label for="age">Age</label>
        <input type="number" name="age" id="age">

        <br>

        <button type="submit" name="btn_submit">Submit</button>


    </form>

    <?php

    include "Fare.php";
     
    if(isset($_POST['btn_submit'])){
        $distance = $_POST['kilometer'];
        $age = $_POST['age'];

        $fare = new Fare;

        $fare-> setValues($distance, $age);

        echo $fare->getFare();
    }
    ?>
</body>
</html>