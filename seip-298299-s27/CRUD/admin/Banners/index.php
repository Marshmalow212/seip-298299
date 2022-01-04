<?php
//echo"<pre>";
//print_r($_SERVER);
//echo"</pre>";
//die();
$appRoot = $_SERVER['DOCUMENT_ROOT']."/seip-298299-s27/CRUD/vendor/";

include_once ($appRoot."/autoload.php");

use Crud\BannerController;

$_banner = new BannerController();

//$_banner->index();
$tableName = "banners";
$resultSet = $_banner->index($tableName);
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
                <h1 class="text-center mb-4 mt-2">Banner List </h1>
                <div class="inline-list">
                    <p class="inline-list-item nav-link">        <a href="create.php" class="btn btn-outline-dark">Create Banner</a>  <a href="trashlist.php" class="btn btn-outline-dark">Trash</a></p>
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
                        <td scope="row" ><?= $result['title'] ?></td>
                        <td ><?= $result['picture'] ?></td>
<!--                        <td >--><?//= $result['link'] ?><!--</td>-->
                        <td ><?= $result['promotional_message'] ?></td>
                        <td ><?= $result['created_at'] ?></td>
                        <td ><?= $result['modified_at'] ?></td>
                        <td> <div class="btn-group">
                                <a href="show.php?id=<?php echo $result['id']?>" class="btn btn-primary">Show</a>
                                <a href="edit.php?id=<?php echo $result['id']?>" class="btn btn-success">Edit</a>
<!--                                <a href="delete.php?id=--><?php //echo $result['id']?><!--" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>-->
                                <a href="trash.php?id=<?php echo $result['id']?>" class="btn btn-secondary" onclick="return confirm('Are you sure?')">Delete</a>

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
