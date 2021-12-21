<?php
session_start();
include "../DatabaseConnection.php";
echo "<pre>";
$conn = databaseConnection();

//print_r($_GET);

$show_id = $_GET['id'];

$deleteQuery = "delete from contact where id = ?";

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

header("Location: ./index.php");
