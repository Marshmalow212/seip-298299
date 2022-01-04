<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/DatabaseConnection.php';
echo "<pre>";
$conn = databaseConnection();

//print_r($_GET);

$show_id = $_GET['id'];

$deleteQuery = "update banners set soft_delete=1 where id = ?";

$queryStatement = $conn->prepare($deleteQuery);

$resultSet = $queryStatement->execute([$show_id]);

$result = $queryStatement->fetch();
//print_r($result);
echo "</pre>";

if(($resultSet)){
    $_SESSION['message'] = "Banner Trashed!";
}
else{
    $_SESSION['message'] = "Banner not Trashed!";
}

header("Location: ./index.php");
