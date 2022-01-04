<?php
session_start();
echo "<pre>";
include '../DatabaseConnection.php';

$uploadDirectory = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
print_r($_POST);
print_r($_FILES);
$_id = $_GET['id'];
//database connection to ecommerce

$conn = databaseConnection();
//PDO error exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$isActive = $isDraft = $softDelete = $maxDisplay = 0;


if(array_key_exists('is_active',$_POST))$isActive = 1;
if(array_key_exists('is_draft',$_POST))$isDraft = 1;
if(array_key_exists('soft_delete',$_POST))$softDelete = 1;
if(array_key_exists('max_display',$_POST))$maxDisplay = 1;






if($conn){
    echo 'Database Connection Successful!<br>';
}
else echo 'Please Connect database first!<br>';

if(empty($_FILES['picture']['name'])){

    $updateQuery = "Update banners set title=?,promotional_message=?,is_active=?,is_draft=?,soft_delete=?,max_display=?,created_at=? where id=?;";
    $queryStatement = $conn->prepare($updateQuery);
    $queryResult = $queryStatement->execute([$_POST['title'],$_POST['promotional_message'],$isActive,$isDraft,$softDelete,$maxDisplay,$_POST['created_at'],$_id]);


}
else{

    $pictureName = $_FILES['picture']['name'];
    $target = $_FILES['picture']['tmp_name'];
    $destination = $uploadDirectory.$_FILES['picture']['name'];
    $link = move_uploaded_file($target,$destination);


    $updateQuery = "Update banners set title=?,picture=?,link=?,promotional_message=?,is_active=?,is_draft=?,soft_delete=?,max_display=?,created_at=? where id=?;";
    $queryStatement = $conn->prepare($updateQuery);
    $queryResult = $queryStatement->execute([$_POST['title'],$pictureName,$destination,$_POST['promotional_message'],$isActive,$isDraft,$softDelete,$maxDisplay,$_POST['created_at'],$_id]);

}


if(($queryResult)){
    $_SESSION['message'] = "Banner Updated!";
}
else{
    $_SESSION['message'] = "Banner not updated!";
}
echo "</pre>";

header("Location: ./index.php");