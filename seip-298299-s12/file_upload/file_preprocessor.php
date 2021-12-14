<pre>
<?php

print_r($_FILES);
/*if(isset($_FILES['my_file'])){
    echo 'File found<br>';
    if(empty($_FILES['my_file']['name'])){
        echo 'File is empty<br>';
    }
    else echo 'File is not empty<br>';
}*/

if ($_FILES['my_file']['type'] == 'image/jpeg'){
    echo 'File is valid<br>';

    $target = $_FILES['my_file']['tmp_name'];
    $destination = 'uploads/'.$_FILES['my_file']['name'];
    $uploaded = move_uploaded_file($target,$destination);
    if($uploaded){
        echo 'file is uploaded!<br>'.$uploaded.'<br>';
    }
}
else if ($_FILES['my_file']['type'] == 'application/pdf'){
    echo 'File is valid<br>';

    $target = $_FILES['my_file']['tmp_name'];
    $destination = 'uploads/pdf/'.$_FILES['my_file']['name'];
    $uploaded = move_uploaded_file($target,$destination);
    if($uploaded){
        echo 'file is uploaded!<br>'.$uploaded.'<br>';
    }
}

else echo 'File is invalid<br>';




?>
</pre>
