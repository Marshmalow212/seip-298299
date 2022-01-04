<pre>
<?php

$dirFiles = glob('./*');
?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Server</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <h1 class="text-center mb-4 mt-2"><?=$_SERVER['DOCUMENT_ROOT']?></h1>

                <div class="row">
                    <?php
                    foreach($dirFiles as $file):
                        ?>

                               <div class="col-6">
                                   <label class="text-center"><?=$file?></label>
                               </div>
                               <div class="col-6">
                                   <img src="<?=$file?>" alt="<?=$file?>" class="img-fluid">
                               </div>

                    <?php
                    endforeach;
                    ?>
                </div>


            </div>

        </div>

    </div>

</section>

</body>
</html>


