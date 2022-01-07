<?php
include_once ("../../config.php");
$pageReq = $_GET['page'];
?>

<html>
<?php
include_once ("../views/elements/head.php");
?>
<body>
    <?php
 
        include_once("../views/elements/header.php");
    ?>
<div class="container">
    <div class="row justify-content-center">
        <?php
        if($pageReq == 'login'){
        include_once ("../views/elements/signin.php");

        }
        else if($pageReq == 'register'){
        include_once ("../views/elements/signup.php");
        }
        else if($pageReq == 'dashboard'){
            include_once("../views/elements/dashboard.php");
        }

        ?>

    </div>
</div>

</body>
</html>

