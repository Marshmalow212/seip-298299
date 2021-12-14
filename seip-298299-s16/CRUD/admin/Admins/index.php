<?php
session_start();
include '../DatabaseConnection.php';
echo "<pre>";

//database connection to ecommerce

$conn = databaseConnection();
//PDO error exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$selectQuery = "select * from admins";

$queryStatement = $conn->prepare($selectQuery);

$queryResult = $queryStatement->execute();

$resultSet = $queryStatement->fetchAll();

//print_r($resultSet);

echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admins</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div>
                    <?php
                    echo $_SESSION['message'];
                    $_SESSION['message']="";
                    ?>
                </div>
                <h1 class="text-center mb-4 mt-2">Admins</h1>
                <ul>
                    <li class="inline-list-item nav-link">        <a href="create.php" class="btn btn-outline-dark">Create Product</a></li>
                </ul>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email Name</th>
                        <th scope="col">Password</th>
                        <th scope="col">Active</th>
                        <th scope="col">Draft</th>
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
                        <td ><?= $result['name'] ?></td>
                        <td ><?= $result['email'] ?></td>
                        <td ><?= $result['password'] ?></td>
                        <td ><?= $result['is_active'] ?></td>
                        <td ><?= $result['is_draft'] ?></td>
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
                        <td class="text-center" colspan="6">No More Admins now<br><a class="nav-link" href="create.php"> Click Here to Add</a></td>
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
