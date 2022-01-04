<?php
session_start();
include "../DatabaseConnection.php";
echo "<pre>";
$conn = databaseConnection();

//print_r($_GET);

$show_id = $_GET['id'];

$deleteQuery = "delete from admins where id = ?";

$queryStatement = $conn->prepare($deleteQuery);

$resultSet = $queryStatement->execute([$show_id]);

$result = $queryStatement->fetch();
//print_r($result);
echo "</pre>";

if(($resultSet)){
    $_SESSION['message'] = "Admin Deleted!";
}
else{
    $_SESSION['message'] = "Admin not Deleted!";
}

header("Location: ./index.php");
