<?php
include "../DatabaseConnection.php";
echo "<pre>";
$conn = databaseConnection();
//print_r($_GET);

$show_id = $_GET['id'];

$showQuery = "select * from carts where id = ?";

$queryStatement = $conn->prepare($showQuery);

$resultSet = $queryStatement->execute([$show_id]);

$result = $queryStatement->fetch();
//print_r($result);
echo "</pre>";
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
                <h1 class="text-center mb-4 mt-2">Cart Item Update</h1>
                <form method="post" action="update.php?id=<?php echo $result['id']?>" enctype="multipart/form-data">
                    <div class="mb-3 row" >
                        <!--                        <label for="inputId" class="col-sm-2 col-form-label">Id</label>-->
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="inputId" name="id" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputSold" class="col-sm-2 col-form-label">Sold</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputSold" name="sold" value="<?=$result['sld']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPrductID" class="col-sm-2 col-form-label">Product ID</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputProductID" name="product_id" value="<?=$result['product_id']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputProductTitle" class="col-sm-2 col-form-label">Product Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputProductTitle" name="product_title" value="<?=$result['product_title']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputQuantity" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputQuantity" name="qty" value="<?=$result['qty']?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPicture" class="col-sm-2 col-form-label">Picture</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="inputPicture" name="picture" value="">
                            <img src="<?=$webRoot.$result['picture']?>" alt="<?=$result['picture']?>" class="img-fluid">
                        </div>
                        <input type="hidden" name="picture" value="<?=$result['picture']?>">
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPrductID" class="col-sm-2 col-form-label">Unit Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputProductID" name="unit_price" value="<?=$result['unit_price']?>">
                        </div>
                    </div>
                    <!--                    <div class="mb-3 row">-->
                    <!--                        <label for="inputPrductID" class="col-sm-2 col-form-label">Total Price</label>-->
                    <!--                        <div class="col-sm-10">-->
                    <!--                            <input type="number" class="form-control" id="inputProductID" name="total_price" value="">-->
                    <!--                        </div>-->
                    <!--                    </div>-->




                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" >Add</button>
                    </div>

                </form>
            </div>

        </div>

    </div>

</section>

</body>
</html>
