<?php
session_start();
/*echo "<pre>";
print_r($_POST);
echo "</pre>";
die();*/

include '../DatabaseConnection.php';
//database connection to ecommerce
$conn = databaseConnection();
//PDO error exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$isActive = $isDraft = 0;
//$modifiedAt = empty($_POST['modified_at'])?null:$_POST['modified_at'];

if(array_key_exists('is_active',$_POST))$isActive = 1;
if(array_key_exists('is_draft',$_POST))$isDraft = 1;





if($conn){
    echo 'Database Connection Successful!<br>';
}
else echo 'Please Connect database first!<br>';

$insertQuery = "INSERT INTO admins (name,email,password,is_active,is_draft,created_at) VALUES (?,?,?,?,?,?);";

$queryStatement = $conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$_POST['title']);

$queryData = [$_POST['name'],$_POST['email'],$_POST['password'],$isActive,$isDraft,$_POST['created_at']];

//print_r($queryData);

$queryResult = $queryStatement->execute($queryData);

if($queryResult){
    $_SESSION['message'] = "Admin Created!";
}
else{
    $_SESSION['message'] = "Admin declined!";
}



header("Location: index.php");
