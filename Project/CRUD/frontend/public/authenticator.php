<?php
include_once ("./../../config.php");

use Crud\UserController;

$users = new UserController();


$_is_authenticated = 0;
// $_is_authenticated = 0;

    $authentication = $users->authenticate();
//            print_r($authentication);
                if(empty($authentication)){
                    $_is_authenticated = 1;
                }
                else{
                    header("location: index.php");
                    $_SESSION['message']='Login Successful';
                    $_SESSION['user_id']=$authentication['id'];
                    }



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

