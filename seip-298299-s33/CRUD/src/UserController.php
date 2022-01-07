<?php




namespace Crud;
include_once ("./../../config.php");

use PDO;

class UserController
{
    public $conn = null;
    public function __construct()
    {
        //database connection to ecommerce

        $this->conn = databaseConnection();
//PDO error exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
//index function
    public function index(){

        echo "<pre>";


        $selectQuery = "select * from users;";


        $queryStatement = $this->conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute();

        $resultSet = $queryStatement->fetchAll();

//print_r($resultSet);

        echo "</pre>";
        return $resultSet;
    }


//    store function
    public function store($postData){

        $isActive = $isDraft = 0;
//$modifiedAt = empty($postData['modified_at'])?null:$postData['modified_at'];

        if(array_key_exists('is_active',$postData))$isActive = 1;
        if(array_key_exists('is_draft',$postData))$isDraft = 1;


        $normalPass = $postData['password'];
        $hashedPass = md5($normalPass);


        if($this->conn){
            echo 'Database Connection Successful!<br>';
        }
        else echo 'Please Connect database first!<br>';

        $insertQuery = "INSERT INTO users (username,fullname,email,password,phone) VALUES (?,?,?,?,?);";

        $queryStatement = $this->conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$postData['title']);

        $queryData = [$postData['username'],$postData['fullname'],$postData['email'],$hashedPass,$postData['phone']];

//print_r($queryData);

        $queryResult = $queryStatement->execute($queryData);

        if($queryResult){
            $_SESSION['message'] = "User Created!";
        }
        else{
            $_SESSION['message'] = "User declined!";
        }


    }


//show function
    public function show($id){
        //print_r($_GET);



        $showQuery = "select * from users where id = ?";

        $queryStatement = $this->conn->prepare($showQuery);

        $resultSet = $queryStatement->execute([$id]);

        $result = $queryStatement->fetch();
//print_r($result);
        return $result;

    }


//    update function

    public function update($postData,$id){
        $isActive = $isDraft = 0;
//$modifiedAt = empty($postData['modified_at'])?null:$postData['modified_at'];

        if(array_key_exists('is_active',$postData))$isActive = 1;
        if(array_key_exists('is_draft',$postData))$isDraft = 1;


        $normalPass = $postData['password'];
        $hashedPass = md5($normalPass);


        if($this->conn){
            echo 'Database Connection Successful!<br>';
        }
        else echo 'Please Connect database first!<br>';

        $insertQuery = "UPDATE users set username=?,fullname=?,email=?,password=?,phone=? where id=?;";

        $queryStatement = $this->conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$postData['title']);

        $queryData = [$postData['username'],$postData['fullname'],$postData['email'],$hashedPass,$postData['phone'],$id];

//print_r($queryData);

        $queryResult = $queryStatement->execute($queryData);

        if($queryResult){
            $_SESSION['message'] = "User Created!";
        }
        else{
            $_SESSION['message'] = "User declined!";
        }



    }


//    edit function

    public function edit($id){
        echo "<pre>";

//print_r($_GET);



        $showQuery = "select * from users where id = ?";

        $queryStatement = $this->conn->prepare($showQuery);

        $resultSet = $queryStatement->execute([$id]);

        $result = $queryStatement->fetch();
//print_r($result);
        echo "</pre>";
//die();
        return $result;

    }

//    delete function

    public function delete($id){

//print_r($_GET);



        $deleteQuery = "delete from users where id = ?";

        $queryStatement = $this->conn->prepare($deleteQuery);

        $resultSet = $queryStatement->execute([$id]);

        $result = $queryStatement->fetch();
//print_r($result);
        echo "</pre>";

        if(($resultSet)){
            $_SESSION['message'] = "User Deleted!";
        }
        else{
            $_SESSION['message'] = "User not Deleted!";
        }

    }

}

