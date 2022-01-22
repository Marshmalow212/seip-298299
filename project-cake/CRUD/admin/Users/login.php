<?php

include_once ("../../config.php");

use Crud\UserController;

$users = new UserController();

$authentication = $users->authenticate();
//            print_r($authentication);
if(empty($authentication)){
    $_SESSION['message']='';
header('Location:'.$projectRoot.'CRUD/frontend/public/authenticator.php');
}
else{
    header("location: index.php");
    $_SESSION['message']='Login Successful';
    $_SESSION['user_id']=$authentication['id'];
header('Location:'.$projectRoot.'CRUD/frontend/public/index.php');
}









