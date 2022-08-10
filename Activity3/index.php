<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <title>Document</title>
</head>
<body>
    <main class="container">
        <div class="w-50 mx-auto mt-4">
            <form action="" method="post">

            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" class="form-control">

            <br>
            
            <label for="civil_status" >Civil Status</label><br>
            <select name="civil_status" id="" class="form-control">
                <option value="single">Single</option>
                <option value="married">Married</option>
            </select>
            <br>
        
            <div class="row mb-2">
                <div class="col">
                    <label for="" >Position</label><br>
                    <select name="position" id="" class="form-control">
                        <option value="staff">Staff</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <br>
                <div class="col">
                    <label for="">Employment Status</label><br>
                    <select name="employment_status" id="" class="form-control">
                        <option value="contractual">Contractual</option>
                        <option value="probationary">Probationary</option>
                        <option value="regular">Regular</option>
                    </select>
                </div>
            </div>

            <br>

            <label for="hour">Number of hours worked</label><br>
            <input type="number" name="hour" id="number" class="form-control">

            <br>

            <button type="submit" name="btn_submit" class="form-control w-100 bg-primary">Submit</button>
        
        
            </form>
        </div>
    </main>

    <?php
    include "NetIncome.php"; 

    if(isset($_POST['btn_submit'])){
        $civil = $_POST['civil_status'];
        $position = $_POST['position'];
        $employment = $_POST['employment_status'];
        $hour = $_POST['hour'];

        $income = new Income;

        $income->setValues($civil, $position, $employment, $hour);
    ?>
        
        <h1 class="display-5 text-center my-5">
            <span class="fw-bold">Hour Worked:</span> <span class="text-danger"><? echo $hour;?></span>
        </h1>

        <h1 class="display-5 text-center my-5">
            <span class="fw-bold">Regular Pay:</span> <span class="text-danger">$<?= $income->calculateRegular();?></span>
        </h1>

        <h1 class="display-5 text-center my-5">
            <span class="fw-bold">Overtime Pay:</span> <span class="text-danger">$<?= $income->calculateOvertime();?></span>
        </h1>

        <h1 class="display-5 text-center my-5">
            <span class="fw-bold">Gross Pay:</span> <span class="text-danger">$<?= $income->calculateGross();?></span>
        </h1>

        <h1 class="display-5 text-center my-5">
            <span class="fw-bold">Healthcare Deduction:</span> <span class="text-danger">$<?= $income->calculateHealthcare();?></span>
        </h1>

        <h1 class="display-5 text-center my-5">
            <span class="fw-bold">Tax Deduction:</span> <span class="text-danger">$<?= $income->calculateTax();?></span>
        </h1>

        <h1 class="display-5 text-center my-5">
            <span class="fw-bold">Net Income:</span> <span class="text-danger">$<?= $income->calculateIncome();?></span>
        </h1>

        


        
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>