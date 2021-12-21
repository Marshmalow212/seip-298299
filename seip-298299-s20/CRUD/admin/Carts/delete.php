<?php
session_start();
include "../DatabaseConnection.php";
echo "<pre>";
$conn = databaseConnection();

//print_r($_GET);

$show_id = $_GET['id'];

$deleteQuery = "delete from carts where id = ?";

$queryStatement = $conn->prepare($deleteQuery);

$resultSet = $queryStatement->execute([$show_id]);

$result = $queryStatement->fetch();
//print_r($result);
echo "</pre>";

if(($resultSet)){
    $_SESSION['message'] = "Cart Item Deleted!";
}
else{
    $_SESSION['message'] = "Cart Item not Deleted!";
}

header("Location: ./index.php");
