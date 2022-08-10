<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-4 fw-bold my-5 text-center">School Activity</h1>
    <div class="container w-25 my-5">
        <form action="" method="post">
            <div class="row mb-4">
                <div class="col">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="year_level" class="form-label fw-bold">Year Level</label>
                    <select name="year_level" id="year_level" class="form-select">
                        <option hidden>Select a Year Level</option>
                        <option value="1">Year 1</option>
                        <option value="2">Year 2</option>
                        <option value="3">Year 3</option>
                        <option value="4">Year 4</option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="units" class="form-label fw-bold">Number of Units</label>
                    <input type="number" name="units" id="units" class="form-control" min="1" max="23">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col text-center">
                    <label for="" class="form-label fw-bold">Lab Options</label>
                    <br>
                    <input type="radio" class="btn-check" name="lab_option" id="with_lab_option" value="with_lab" autocomplete="off">
                    <label class="btn btn-outline-success" for="with_lab_option">With Lab</label>

                    <input type="radio" class="btn-check" name="lab_option" id="no_lab_option" value="no_lab" autocomplete="off">
                    <label class="btn btn-outline-danger" for="no_lab_option">No Lab</label>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <button type="submit" class="btn btn-primary w-100" name="calculate">Calculate</button>
                </div>
            </div>
        </form>

        <?php
            include 'School(short version).php';

            if(isset($_POST['calculate'])){
                $name = $_POST['name'];
                $year_level = $_POST['year_level'];
                $units = $_POST['units'];
                $lab_option = $_POST['lab_option'];

                $school = new School;

                $school->setValues($name, $year_level, $units, $lab_option);
        ?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Name:</th>
                        <td><?= $name;?></td>
                    </tr>
                    <tr>
                        <th>Year Level:</th>
                        <td><?= $year_level;?></td>
                    </tr>
                    <tr>
                        <th>Number of Units:</th>
                        <td><?= $units;?></td>
                    </tr>
                    <tr>
                        <th>Lab Option:</th>
                        <td><?= ($lab_option == "with_lab") ? "With Lab" : "No Lab";?></td>
                        <!-- ternary operator ~~ (expression/condition) ? pass : fail; -->
                    </tr>
                    <tr>
                        <th class="h3 text-danger fw-bold">Total:</th>
                        <td class="h3 text-danger fw-bold"><?= $school->calculateValues()?></td>
                    </tr>
                </table>
        <?php
            }
        ?>

    </div>
</body>
</html>