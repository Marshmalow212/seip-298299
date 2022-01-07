<?php

include_once ("../../config.php");

use Crud\UserController;



if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'] || empty($_POST['phone'] || empty($_POST['fullname'])))){
    $_SESSION['message']="Field should not be empty";
    print_r($_POST);
            $formData = serialize($_POST);
        header('location: create.php?formdata='.$formData);
}

$users = new UserController();

$users->store($_POST);

header("Location: index.php");




