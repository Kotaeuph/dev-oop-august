<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 my-5">
        <h1 class="display-4 fw-bold my-5">Fare Calculator</h1>
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col">
                    <label for="kilometers" class="form-label">Kilometers Traveled</label>
                    <input type="text" name="kilometers" id="kilometers" class="form-control" required>
                </div>
                <div class="col">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" name="age" id="age" class="form-control" required min="10" max="80">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="submit" value="Calculate" name="calculate" class="btn btn-primary w-100">
                </div>
            </div>
        </form>

        <?php
            include 'Fare.php';

            if(isset($_POST['calculate'])){
                // PROCESSING OF THE FORM DATA
                $kilometers = $_POST['kilometers'];
                $age = $_POST['age'];

                // INSTANTIATING THE OBJECT
                $fare = new Fare;

                // SETTING THE VALUES
                $fare->setValues($kilometers, $age);
        ?>
                <!-- DISPLAY -->
                <h1 class="display-5 text-center my-5">
                    <span class="fw-bold">Fare:</span> <span class="text-danger">$<?= $fare->calculateFare();?></span>
                </h1>
        <?php
            }
        ?>
    </div>
</body>
</html>