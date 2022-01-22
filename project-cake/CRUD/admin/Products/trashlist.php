<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/DatabaseConnection.php';
echo "<pre>";

//database connection to ecommerce

$conn = databaseConnection();
//PDO error exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!empty($_GET['id'])){
    $trashId = $_GET['id'];
    $queryResult = ($conn->prepare("Update banners set soft_delete=0 where id=?"))->execute([$trashId]);
}


$selectQuery = "select * from banners where soft_delete=1";

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
    <title>Banners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <?php
                    echo $_SESSION['message'];
                    $_SESSION['message']="";
                    ?>
                </div>
                <h1 class="text-center mb-4 mt-2">Trash</h1>
                <div class="list-inline">
                    <li class="inline-list-item nav-link"><a href="index.php" class="btn btn-outline-dark">Banner Index</a></li>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Picture</th>
<!--                        <th scope="col">Link</th>-->
                        <th scope="col">Promotional Message</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Modified At</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody >
                    <?php
                    if(count($resultSet)>0):
                    foreach ($resultSet as $result): ?>
                    <tr>
                        <td ><?= $result['title'] ?></td>
                        <td ><?= $result['picture'] ?></td>
<!--                        <td >--><?//= $result['link'] ?><!--</td>-->
                        <td ><?= $result['promotional_message'] ?></td>
                        <td ><?= $result['created_at'] ?></td>
                        <td ><?= $result['modified_at'] ?></td>
                        <td> <div class="btn-group">
                                <a href="delete.php?id=<?php echo $result['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                <a href="trashlist.php?id=<?php echo $result['id']?>" class="btn btn-secondary" onclick="return confirm('Are you sure?')">Restore</a>

                            </div>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                    <tr>
                        <td class="text-center" colspan="6">Trash is Empty</td>
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
