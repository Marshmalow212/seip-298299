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
$status = $softDelete = 0;
//$modifiedAt = empty($_POST['modified_at'])?null:$_POST['modified_at'];

if(array_key_exists('status',$_POST))$status = 1;
if(array_key_exists('soft_delete',$_POST))$softDelete = 1;





if($conn){
    echo 'Database Connection Successful!<br>';
}
else echo 'Please Connect database first!<br>';

$insertQuery = "INSERT INTO contact (name,email,subject,comment,status,soft_delete,date) VALUES (?,?,?,?,?,?,?);";

$queryStatement = $conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$_POST['title']);

$queryData = [$_POST['name'],$_POST['email'],$_POST['subject'],$_POST['comment'],$status,$softDelete,$_POST['date']];

//print_r($queryData);

$queryResult = $queryStatement->execute($queryData);

if($queryResult){
    $_SESSION['message'] = "Contact Inserted!";
}
else{
    $_SESSION['message'] = "Contact not Inserted!";
}



header("Location: index.php");