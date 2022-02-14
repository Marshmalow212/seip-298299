<?php
include_once ("./../../config.php");

use Crud\UserController;
$show_id = $_GET['id'];
$users = new UserController();

$result = $users->show($show_id);
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
                <h1 class="text-center mb-4 mt-2">Admin Details</h1>
                <?php foreach ($result as $key => $value): ?>
                <?php if(!is_string($key) || $key == 'id')continue; ?>

                <dl class="row">
                    <dt class="col-sm-4"><?= $key ?></dt>
                    <dd class="col-sm-5"><?= $value ?></dd>
                </dl>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section>

</body>
</html>
