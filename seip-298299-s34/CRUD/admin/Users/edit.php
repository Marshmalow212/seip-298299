<?php
include_once ("./../../config.php");

use Crud\UserController;
$show_id = $_GET['id'];
$users = new UserController();

$result = $users->edit($show_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <h1 class="text-center mb-4 mt-2">Edit User</h1>
                <form method="post" action="update.php?id=<?php echo $result['id']?>" >
                    <input type="hidden" name="id" value="">
                    <div class="col-md-6">
                        <label  class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?=$result['username']?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password" value="<?=$result['password']?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="inputPassword4" name="fullname" value="<?=$result['fullname']?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputPassword4" name="email" value="<?=$result['email']?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="inputPassword4" name="phone" value="<?=$result['phone']?>">
                    </div>


                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

</section>

</body>
</html>
