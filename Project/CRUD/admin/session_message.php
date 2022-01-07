<?php
if(array_key_exists('message',$_SESSION) && $_SESSION['message']!=''):
    ?>
    <div>
        <?php
        echo $_SESSION['message'];
        $_SESSION['message']="";
        ?>
    </div>
<?php
endif;
?>