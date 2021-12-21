<?php
echo "<pre>";

//database connection to ecommerce

$servername = 'localhost';
$username = 'root';
$password = '';
$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
//PDO error exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$selectQuery = "select * from product";

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
    <title>Products List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-5">
                <h1 class="text-center mb-4 mt-2">Products List</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($resultSet as $result): ?>
                    <tr>
                        <td ><?= $result['title'] ?></td>
                        <td> <div class="btn-group">
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>

            </div>

        </div>

    </div>

</section>

</body>
</html>
