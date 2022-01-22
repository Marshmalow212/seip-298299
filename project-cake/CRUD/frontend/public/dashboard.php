<?php
include_once ("../../config.php");

if(array_key_exists('user_id',$_SESSION) && !empty($_SESSION['user_id'])):
?>
<html>
<?php
include_once ("../views/elements/head.php");
?>

<body>
<?php
include_once ("../views/elements/header.php");
?>

<div class="container">
    <div class="row justify-content-center">
        <?php

include_once("../views/elements/dashboard-title.php");
        ?>
</div>
</div>
<?php
include_once ("../views/elements/scripts.php");
?>
</body>
</html>

<?php
else:
include_once ("authenticator.php");
endif;
?>

