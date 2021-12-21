<?php
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
        <div class="row justify-content-center bg-success text-light">
            <div class="col-md-5">
                <h1 class="text-center mb-4 mt-2">Add New</h1>

                <form method="post" action="store.php" enctype="multipart/form-data">
                    <div class="mb-3 row" >
<!--                        <label for="inputId" class="col-sm-2 col-form-label">Id</label>-->
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="inputId" name="id" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" name="name" value="">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputName" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" name="link" value="">
                        </div>
                    </div>



                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="inputActive" name="soft_delete">
                        <label class="form-check-label" for="inputActive">
                            Soft Delete
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="inputDraft" name="is_draft">
                        <label class="form-check-label" for="inputDraft">
                           Draft
                        </label>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputCreatedAt" class="col-sm-2 col-form-label">Created At</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputCreatedAt" name="created_at" value="">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputModifiedAt" class="col-sm-2 col-form-label">Modified At</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputModifiedAt" name="modified_at" value="">
                        </div>
                    </div>

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