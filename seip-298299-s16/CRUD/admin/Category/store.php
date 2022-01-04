<?php
session_start();
echo "<pre>";
var_dump($_POST);
var_dump($_FILES);

//database connection to ecommerce

$servername = 'localhost';
$username = 'root';
$password = '';
$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
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

$pictureName = $_FILES['picture']['name'];
$target = $_FILES['picture']['tmp_name'];
$destination = 'uploads/'.$_POST['title'];
$link = move_uploaded_file($target,$destination);

$insertQuery = "INSERT INTO banners (title,picture,link,promotional_message,is_active,is_draft,soft_delete,max_display,created_at) VALUES (?,?,?,?,?,?,?,?,?);";

$queryStatement = $conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$_POST['title']);


$queryResult = $queryStatement->execute([$_POST['title'],$pictureName,$destination,$_POST['promotional_message'],$isActive,$isDraft,$softDelete,$maxDisplay,$_POST['created_at']]);

if($queryResult){
    $_SESSION['message'] = "Banner Inserted!";
}
else{
    $_SESSION['message'] = "Banner not Inserted!";
}

echo "</pre>";

header("Location: ./index.php");