<?php
include_once ('../../config.php');

use Crud\ProductController;

$Product = new ProductController();


$resultSet = $Product->allDraft();
if(!empty($_GET['id'])){
    $draftId = $_GET['id'];
    $Product->toIndex($draftId);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Product draft</title>
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
                <h1 class="text-center mb-4 mt-2">Draft</h1>
                <div class="list-inline">
                    <li class="inline-list-item nav-link"><a href="index.php" class="btn btn-outline-dark">Products</a></li>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Picture</th>
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
                        <td ><?= $result['title'] ?></td>
                        <td ><?= $result['picture'] ?></td>
                        <td ><?= $result['mrp'] ?>&dollar;</td>
                        <td ><?= $result['created_at'] ?></td>
                        <td ><?= $result['modified_at'] ?></td>
                        <td> <div class="btn-group">
                                <a href="delete.php?id=<?php echo $result['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                <a href="draftlist.php?id=<?php echo $result['id']?>" class="btn btn-secondary" onclick="return confirm('Are you sure?')">Restore</a>

                            </div>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                    <tr>
                        <td class="text-center" colspan="6">Draft is Empty</td>
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
