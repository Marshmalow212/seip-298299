<?php
include "../DatabaseConnection.php";
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

header("Location: ./index.php");
