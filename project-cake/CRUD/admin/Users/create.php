<?php
//echo session_status();
include_once ("../../config.php");
//echo"<pre>";
////$data = array();
////parse_str($_GET['data'],$data);
//print_r($_GET);
//echo "</pre>";
//validation
//$formData = ["hello"=>"world","jello"=>"tello"];
//$jsonStr = serialize($formData);
//print_r($jsonStr);
//$jsonStr = unserialize($jsonStr);
//print_r($jsonStr);
//echo $jsonStr['hello'];
$formData=[];
if(array_key_exists('formdata',$_GET)){
    $formData = $_GET['formdata'];
    $formData = unserialize($formData);
//    print_r($formData);
}


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
        <div class="row justify-content-center bg-success text-light">
            <div class="col-md-5">
                <?php
                if(array_key_exists('message',$_SESSION) && $_SESSION['message']!=''):
                    ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['message'];
                        $_SESSION['message']="";
                        ?>
                    </div>
                <?php
                endif;
                ?>
                <h1 class="text-center mb-4 mt-2">Add User</h1>

                <form class="row" method="post" action="store.php"  >
                    <input type="hidden" name="id" value="">
                    <div class="col-md-6">
                        <label  class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?=array_key_exists('username',$formData)?$formData['username']:''?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password" value="<?=array_key_exists('password',$formData)?$formData['password']:''?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="inputPassword4" name="fullname" value="<?=array_key_exists('fullname',$formData)?$formData['fullname']:''?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputPassword4" name="email" value="<?=array_key_exists('email',$formData)?$formData['email']:''?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="inputPassword4" name="phone" value="<?=array_key_exists('phone',$formData)?$formData['phone']:''?>">
                    </div>


                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

</section>

</body>
</html>