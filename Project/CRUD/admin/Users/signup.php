<?php

include_once ("../../config.php");

use Crud\UserController;

var_dump($_POST);

if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'] || empty($_POST['phone'] || empty($_POST['fullname'])))){
    $_SESSION['message']="Field should not be empty";
//    print_r($_POST);
            $formData = serialize($_POST);
        header('location:'.$projectRoot.'CRUD/frontend/public/signup.php?formdata='.$formData);
}
else{
$users = new UserController();

$users->store($_POST);

header('Location:'.$projectRoot.'CRUD/frontend/public/login.php');

}





