<?php
include_once ("../../config.php");
if(array_key_exists('user_id',$_SESSION ) && !empty($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
    $_SESSION['message']='';
    header('location:index.php');
}

?>
