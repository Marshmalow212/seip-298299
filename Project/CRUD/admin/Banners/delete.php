<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/DatabaseConnection.php';
echo "<pre>";
$conn = databaseConnection();

//print_r($_GET);

$show_id = $_GET['id'];

$deleteQuery = "delete from banners where id = ?";

$queryStatement = $conn->prepare($deleteQuery);

$resultSet = $queryStatement->execute([$show_id]);

$result = $queryStatement->fetch();
//print_r($result);
echo "</pre>";

if(($resultSet)){
    $_SESSION['message'] = "Banner Deleted!";
}
else{
    $_SESSION['message'] = "Banner not Deleted!";
}

header("Location: trashlist.php");
