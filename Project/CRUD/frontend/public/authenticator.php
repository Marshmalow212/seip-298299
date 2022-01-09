<?php
include_once ("./../../config.php");
/*
use Crud\UserController;

$users = new UserController();

if(array_key_exists('logout', $_GET)){
    $_SESSION['user_id']='';
    header('location:index.php');
}*/

//if(array_key_exists('user_id', $_SESSION) && $_SESSION['user_id']!='')header('location:dashboard');

$_is_authenticated = 1;
// $_is_authenticated = 0;



?>

<html>
<?php
include_once ("../views/elements/head.php");
?>
<body>
<div class="container">
    <div class="row justify-content-center">
        <?php

        if($_is_authenticated)
            include_once ('../views/elements/404-error.php');

        ?>

    </div>
</div>

</body>
</html>

