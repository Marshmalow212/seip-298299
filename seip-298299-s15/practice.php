<?php
echo '<h1>Database</h1><br><br>';

//database connection

//$dbConnection = mysqli_connect('localhost','root','');
$servername = 'localhost';
$username = 'root';
$password = '';
$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
if($conn){
    echo "Database Connection Successful!<br>";
}
echo '<br>';
echo "</pre>";





