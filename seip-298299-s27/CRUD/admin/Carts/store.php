<?php
session_start();
echo "<pre>";
var_dump($_POST);
var_dump($_FILES);
include '../DatabaseConnection.php';
//database connection to ecommerce
$uploadDirectory = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
$conn = databaseConnection();
//PDO error exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$isActive = $isDraft = $softDelete = $maxDisplay = 0;
$totalPrice = $_POST['qty'] * $_POST['unit_price'];
if($conn){
    echo 'Database Connection Successful!<br>';
}
else echo 'Please Connect database first!<br>';

$pictureName ='IMG_'.time().'_'. $_FILES['picture']['name'];
$target = $_FILES['picture']['tmp_name'];
$destination = $uploadDirectory.$pictureName;
$link = move_uploaded_file($target,$destination);

$insertQuery = "INSERT INTO carts (sld,product_id,product_title,qty,unit_price,total_price,picture) VALUES (?,?,?,?,?,?,?);";

$queryStatement = $conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$_POST['title']);
$queryData = [$_POST['sold'],$_POST['product_id'],$_POST['product_title'],$_POST['qty'],$_POST['unit_price'],$totalPrice,$pictureName];

$queryResult = $queryStatement->execute($queryData);

if($queryResult){
    $_SESSION['message'] = "Banner Inserted!";
}
else{
    $_SESSION['message'] = "Banner not Inserted!";
}

echo "</pre>";

header("Location: ./index.php");