<?php
session_start();

include "../classes/User.php";

$user = new User;
$product_details = $user->getProductDetails($_GET['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONT AWSOME CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit User</title>
</head>
<body>
    <nav class="navbar navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="dashboard.php" class="navbar-brand ms-3">
            <h1 class="h5">The Compayny</h1>
        </a>

        <div class="ms-auto">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a href="" class="nav-link"><?= $_SESSION['username'] ?></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-danger">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
    <div class="container">
        <div class="card w-50 my-5 mx-auto border-0">
            <div class="card-header border-0 bg-white">
            <h1 class="display-4 fw-bold text-warning text-center">EDIT USER</h1>
            </div>
        

            <div class="card-body">
                <form action="../actions/edit-action.php?user_id=<?= $product_details['id']; ?>" method="post">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="product_name" class="form-label">Product</label>
                            <input type="text" name="product_name" id="product" class="form-control" required value="<?= $product_details['product_name']; ?>">
                        </div>

                        <div class="col-md-12">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" id="peice" class="form-control" required value="<?= $product_details['price']; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" required value="<?= $product_details['quantity']; ?>">
                        </div>
                    </div>

                    

                    <button type="submit" class="btn btn-warning w-100">Edit</button>
                   <a href="dashboard.php" class="btn btn-secondary w-100 mt-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>  
    </main>
    
</body>
</html>