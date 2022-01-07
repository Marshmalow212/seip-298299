<?php
include_once ('../../config.php');

use Crud\ProductController;

$Product = new ProductController();


$resultSet = $Product->index();
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <?php
                    echo $_SESSION['message'];
                    $_SESSION['message']="";
                    ?>
                </div>
                <h1 class="text-center mb-4 mt-2">Product List </h1>
                <div class="inline-list">
                    <p class="inline-list-item nav-link">        <a href="create.php" class="btn btn-outline-dark">Create Product</a>  <a href="draftlist.php" class="btn btn-outline-dark">Draft</a></p>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Status</th>
                        <th scope="col">MRP</th>
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
                        <td scope="row" ><?= $result['title'] ?></td>
                        <td ><?= $result['picture'] ?></td>
                        <td ><?= $result['is_active']?"Active":"Deactivate" ?></td>
                        <td ><?= $result['mrp'] ?>&dollar;</td>
                        <td ><?= $result['created_at'] ?></td>
                        <td ><?= $result['modified_at'] ?></td>
                        <td> <div class="btn-group">
                                <a href="show.php?id=<?php echo $result['id']?>" class="btn btn-primary">Show</a>
                                <a href="edit.php?id=<?php echo $result['id']?>" class="btn btn-success">Edit</a>
<!--                                <a href="delete.php?id=--><?php //echo $result['id']?><!--" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>-->
                                <a href="draft.php?id=<?php echo $result['id']?>" class="btn btn-secondary" onclick="return confirm('Are you sure?')">Delete</a>

                            </div>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                    <tr>
                        <td class="text-center" colspan="5">No Banners in the inventory<br><a class="nav-link" href="create.php"> Click Here to Add</a></td>
                    </tr>
                    <?php
                    endif;
                    ?>

                    </tbody>
                </table>

            </div>

        </div>

    </div>


</body>
</html>
