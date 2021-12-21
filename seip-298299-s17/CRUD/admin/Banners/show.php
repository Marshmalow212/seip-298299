<?php
include "../DatabaseConnection.php";
echo "<pre>";
$conn = databaseConnection();
$webRoot = 'http://localhost:8080/';
//print_r($_SERVER);
//
//echo "</pre>";
//
//die();
//print_r($_GET);

$show_id = $_GET['id'];

$showQuery = "select * from banners where id = ?";

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
    <title>Banner Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <h1 class="text-center mb-4 mt-2">Banner Details</h1>
                <?php foreach ($result as $key => $value): ?>
                <?php if(!is_string($key) || $key == 'id' || $key=='picture')continue; ?>

                <dl class="row">
                    <?php
                    if($key=='link'):
                    ?>
                    <dt class="col-sm-4"><?= ucfirst('picture') ?></dt>
                        <?php
                    $mediaFile = $webRoot.(substr($value,strpos($value,'uploads')));
                        ?>
                    <dd class="col-sm-5"><img class="img-fluid" src="<?= $mediaFile ?>" alt="<?= $value?>"></dd>

                        <?php
                            else:
                        ?>
                    <dt class="col-sm-4"><?= ucfirst($key) ?></dt>
                    <dd class="col-sm-5"><?= $value ?></dd>

                    <?php
                    endif;
                    ?>
                </dl>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section>

</body>
</html>
