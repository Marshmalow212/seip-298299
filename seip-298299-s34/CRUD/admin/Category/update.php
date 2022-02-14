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
$softDelete = $isDraft = 0;
$_id = $_GET['id'];
//$modifiedAt = empty($_POST['modified_at'])?null:$_POST['modified_at'];

if(array_key_exists('soft_delete',$_POST))$softDelete = 1;
if(array_key_exists('is_draft',$_POST))$isDraft = 1;





if($conn){
    echo 'Database Connection Successful!<br>';
}
else echo 'Please Connect database first!<br>';

$insertQuery = "update categories set name=?,link=?,soft_delete=?,is_draft=?,modified_at=? where id=?;";

$queryStatement = $conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$_POST['title']);

$queryData = [$_POST['name'],$_POST['link'],$softDelete,$isDraft,$_POST['modified_at'],$_id];

//print_r($queryData);

$queryResult = $queryStatement->execute($queryData);

if($queryResult){
    $_SESSION['message'] = "Category Updated!";
}
else{
    $_SESSION['message'] = "Category not updated!";
}



header("Location: index.php");