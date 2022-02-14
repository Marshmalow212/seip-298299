<?php


include_once ("../../config.php");

use Crud\CartController;

$_carts = new CartController();

$resultSet = $_carts->index();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Carts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <?php
                include_once ('../session_message.php');
                ?>
                <h1 class="text-center mb-4 mt-2">Cart List</h1>
                <ul>
                    <li class="inline-list-item nav-link">        <a href="create.php" class="btn btn-outline-dark">Create Cart</a></li>
                </ul>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Sold</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Product Title</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(count($resultSet)>0):
                    foreach ($resultSet as $result): ?>
                    <tr>
                        <td ><?= $result['sld'] ?></td>
                        <td ><?= $result['product_id'] ?></td>
                        <td ><?= $result['product_title'] ?></td>
                        <td ><?= $result['picture'] ?></td>
                        <td ><?= $result['qty'] ?></td>
                        <td ><?= $result['unit_price'] ?></td>
                        <td ><?= $result['total_price'] ?></td>
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
                        <td class="text-center" colspan="6">No Banners in the inventory<br><a class="nav-link" href="create.php"> Click Here to Add</a></td>
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
