<?php
session_start();
include "../DatabaseConnection.php";
echo "<pre>";
$conn = databaseConnection();

//print_r($_GET);

$show_id = $_GET['id'];

$deleteQuery = "delete from categories where id = ?";

$queryStatement = $conn->prepare($deleteQuery);

$resultSet = $queryStatement->execute([$show_id]);

$result = $queryStatement->fetch();
//print_r($result);
echo "</pre>";

if(($resultSet)){
    $_SESSION['message'] = "Category Deleted!";
}
else{
    $_SESSION['message'] = "Category not Deleted!";
}

header("Location: ./index.php");
