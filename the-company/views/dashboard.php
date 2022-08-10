<?php

include "../classes/User.php";

session_start();

$user = new User;

$user_list = $user->getAllUsers();

print_r($user_list);


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
    <title>Dahboard</title>
</head>
<body>
    <nav class="navbar navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="dashboard.php" class="navbar-brand ms-3">
            <h1 class="h5">The Compayny</h1>
        </a>

        <div class="ms-auto">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a href="profile.php" class="nav-link"><?= $_SESSION['username'] ?></a>
                </li>
                <li class="nav-item">
                    <a href="../actions/logout.php" class="nav-link text-danger">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container mt-5">
            <h2 class="display-4 fw-bold text-center">User List</h2>

            <table class="table w-50 mx-auto table-hover">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th></th>

                <tbody>
                    <?php
                        if(empty($user_list)){
                    ?>
                        <tr>
                            <td class="text-danger fw-bold text-center" colspan="5">NO users FOUND</td>
                        </tr>
                    <?php
                        }else{
                            foreach($user_list as $user_details){
                    ?>

                                <tr>
                                    <td><?= $user_details['id']; ?></td>
                                    <td><?= $user_details['first_name']; ?></td>
                                    <td><?= $user_details['last_name']; ?></td>
                                    <td><?= $user_details['username']; ?></td>
                                    <td>
                                        <a href="edit-user.php?user_id=<?= $user_details['id']; ?>" class="btn btn-warning btn-sm" title="Edit User">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>

                                        <a href="../actions/delete-action.php?user_id=<?= $user_details['id'] ?>" class="btn btn-danger btn-sm" title="Delete User">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>