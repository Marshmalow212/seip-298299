<?php
include "../DatabaseConnection.php";
echo "<pre>";
$conn = databaseConnection();
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
    <title>Banner Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <h1 class="text-center mb-4 mt-2">Product Update</h1>
                <form method="post" action="update.php?id=<?php echo $result['id']?>" enctype="multipart/form-data">
                    <div class="mb-3 row" >
                        <!--                        <label for="inputId" class="col-sm-2 col-form-label">Id</label>-->
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="inputId" name="id" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTitle" name="title" value="<?php echo $result['title'] ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputPicture" class="col-sm-2 col-form-label">Picture</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="inputPicture" name="picture" value="<?=$webRoot.$result['picture']?>">
                            <img type="file" class="img-fluid" src="<?=$webRoot.$result['picture']?>">
                        </div>
                        <input type="hidden" name="picture" value="<?=$result['picture']?>">
                        <input type="hidden" name="link" value="<?=$result['link']?>">
                    </div>

                    <!--                    <div class="mb-3 row">
                                            <label for="inputLink" class="col-sm-2 col-form-label">Link</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputLink" name="link" value="">
                                            </div>
                                        </div>
                    -->
                    <div class="mb-3 row">
                        <label for="inputPromotionalMessage" class="col-sm-3 col-form-label">Promotional Message</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPromotionalMessage" name="promotional_message" value="<?php echo $result['promotional_message'] ?>">
                        </div>
                    </div>

                    <!--                    <div class="mb-3 row">-->
                    <!--                        <label for="inputHtmlBanner" class="col-sm-2 col-form-label">HTML Banner</label>-->
                    <!--                        <div class="col-sm-10">-->
                    <!--                            <input type="text" class="form-control" id="inputBanner" name="html_banner" value="">-->
                    <!--                        </div>-->
                    <!--                    </div>-->

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="inputActive" name="is_active" <?php echo $result['is_active']?'checked':'' ?>>
                        <label class="form-check-label" for="inputActive">
                            Is Active
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="inputDraft" name="is_draft" <?php echo $result['is_draft']?'checked':'' ?>>
                        <label class="form-check-label" for="inputDraft">
                            Is Draft
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="inputSoftDelete" name="soft_delete" <?php echo $result['soft_delete']?'checked':'' ?>>
                        <label class="form-check-label" for="inputSoftDelete">
                            Soft Delete
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="inputMaxDisplay" name="max_display" <?php echo $result['max_display']?'checked':'' ?>>
                        <label class="form-check-label" for="inputMaxDisplay">
                            Max Display
                        </label>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputCreatedAt" class="col-sm-2 col-form-label">Created At</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputCreatedAt" name="created_at" value="<?php echo $result['created_at'] ?>">
                        </div>
                    </div>



                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" >Update</button>
                    </div>

                </form>
            </div>

        </div>

    </div>

</section>

</body>
</html>
