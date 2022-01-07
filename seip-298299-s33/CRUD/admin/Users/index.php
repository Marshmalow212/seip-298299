<?php

include_once ("./../../config.php");

use Crud\UserController;

$users = new UserController();


$resultSet = $users->index();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <?php
                if(array_key_exists('message',$_SESSION) && $_SESSION['message']!=''):
                    ?>
                    <div>
                        <?php
                        echo $_SESSION['message'];
                        $_SESSION['message']="";
                        ?>
                    </div>
                <?php
                endif;
                ?>
                <h1 class="text-center mb-4 mt-2">Users</h1>
                <ul>
                    <li class="inline-list-item nav-link">        <a href="create.php" class="btn btn-outline-dark">Create User</a></li>
                </ul>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Modified At</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(count($resultSet)>0):
                    foreach ($resultSet as $result): ?>
                    <tr>
                        <td ><?= $result['fullname'] ?></td>
                        <td ><?= $result['username'] ?></td>
                        <td ><?= $result['email'] ?></td>
                        <td ><?= $result['phone'] ?></td>
                        <td ><?= $result['created_at'] ?></td>
                        <td ><?= $result['modified_at'] ?></td>
                        <td> <div class="btn-group">
                                <a href="show.php?id=<?php echo $result['id']?>" class="btn btn-primary">Show</a>
                                <a href="edit.php?id=<?php echo $result['id']?>" class="btn btn-success">Edit</a>
                                <a href="delete.php?id=<?php echo $result['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>

                            </div>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                    <tr>
                        <td class="text-center" colspan="6">No User Found<br><a class="nav-link" href="create.php"> Click Here to Add</a></td>
                    </tr>
                    <?php
                    endif;
                    ?>

                    </tbody>
                </table>

            </div>

        </div>

    </div>

</section>

</body>
</html>
