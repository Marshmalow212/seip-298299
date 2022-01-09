<?php

include_once ("./../../config.php");

use Crud\AdminController;

session_start();
//validation

$formData = $_POST;
$formData = implode(" ",$formData);
//parse_str($_POST,$formData);
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])){
    $_SESSION['message']="Field should not be empty";
    print_r($_POST);
    header("Location: create.php?name=".$_POST['name']."&email=".$_POST['email']."&password=".$_POST['password']."&created_at=".$_POST['created_at']);

}
else{
    $_admins = new AdminController();

    $_admins->store($_POST);

    header("Location: index.php");
}



