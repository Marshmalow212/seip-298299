<?php
echo "<pre>";
var_dump($_POST);

//database connection to ecommerce

$servername = 'localhost';
$username = 'root';
$password = '';
$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
//PDO error exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($conn){
    echo 'Database Connection Successful!<br>';
}
else echo 'Please Connect database first!<br>';

$insertQuery = "INSERT INTO product (title) VALUES (:title);";

$queryStatement = $conn->prepare($insertQuery);

$queryStatement->bindParam(':title',$_POST['title']);

$queryResult = $queryStatement->execute();


echo "</pre>";