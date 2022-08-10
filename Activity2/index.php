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
        <label for="name">Name</label>
        <input type="text" name="" id="">

        <br>

        <label for="year">Year Level</label>
        <select name="year_level" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>

        <br>

        <label for="">Number of unit</label>
        <input type="number" name="price_unit" id="" max="23">

        <br>

        <label for=""><input type="radio" name="with_lab" id=""  value="yes">With lab</label>
        <label for=""><input type="radio" name="with_lab" id="" value="no">No lab</label>

        <br>

        <button type="submit" name="btn_submit">Submit</button>
        


    </form>

    <?php
            include 'School.php';

            if(isset($_POST['btn_submit'])){
                // PROCESSING OF THE FORM DATA
                $year_level = $_POST['year_level'];
                $price_unit = $_POST['price_unit'];
                $with_lab = $_POST['with_lab'];

                // INSTANTIATING THE OBJECT
                $school = new School;

                // SETTING THE VALUES
                $school->setValues($year_level, $price_unit, $with_lab);

                echo $school->calculatePay();
            }
        ?>
</body>
</html>