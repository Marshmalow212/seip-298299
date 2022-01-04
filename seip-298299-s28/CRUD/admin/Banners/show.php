<?php
$appRoot = $_SERVER['DOCUMENT_ROOT']."/seip-298299-s28/CRUD";

include_once ($appRoot."/config.php");

use Crud\BannerController;

$_banner = new BannerController();


$result = $_banner->show();



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
                <?php if(!is_string($key) || $key == 'id' || $key=='link')continue; ?>

                <dl class="row">
                    <?php
                    if($key=='picture'):
                    ?>
                    <dt class="col-sm-4"><?= ucfirst('picture') ?></dt>
                        <?php
                    $mediaFile = $webRoot.$value;
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
