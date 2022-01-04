<?php




namespace Crud;
include_once ("./../../config.php");

use PDO;

class AdminController
{
    public $conn = null;
    public function __construct()
    {
//        session starting
        session_start();
        //database connection to ecommerce

        $this->conn = databaseConnection();
//PDO error exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
//index function
    public function index($tableName){

        echo "<pre>";


        $selectQuery = "select * from admins;";


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





        if($this->conn){
            echo 'Database Connection Successful!<br>';
        }
        else echo 'Please Connect database first!<br>';

        $insertQuery = "INSERT INTO admins (name,email,password,is_active,is_draft,created_at) VALUES (?,?,?,?,?,?);";

        $queryStatement = $this->conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$postData['title']);

        $queryData = [$postData['name'],$postData['email'],$postData['password'],$isActive,$isDraft,$postData['created_at']];

//print_r($queryData);

        $queryResult = $queryStatement->execute($queryData);

        if($queryResult){
            $_SESSION['message'] = "Admin Created!";
        }
        else{
            $_SESSION['message'] = "Admin declined!";
        }


    }


//show function
    public function show($id){
        //print_r($_GET);



        $showQuery = "select * from admins where id = ?";

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





        if($this->conn){
            echo 'Database Connection Successful!<br>';
        }
        else echo 'Please Connect database first!<br>';

        $insertQuery = "UPDATE admins set name=?,email=?,password=?,is_active=?,is_draft=?,modified_at=? where id=?;";

        $queryStatement = $this->conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$postData['title']);

        $queryData = [$postData['name'],$postData['email'],$postData['password'],$isActive,$isDraft,$postData['modified_at'],$id];

//print_r($queryData);

        $queryResult = $queryStatement->execute($queryData);

        if($queryResult){
            $_SESSION['message'] = "Admin Created!";
        }
        else{
            $_SESSION['message'] = "Admin declined!";
        }



    }


//    edit function

    public function edit($id){
        echo "<pre>";

//print_r($_GET);



        $showQuery = "select * from admins where id = ?";

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



        $deleteQuery = "delete from admins where id = ?";

        $queryStatement = $this->conn->prepare($deleteQuery);

        $resultSet = $queryStatement->execute([$id]);

        $result = $queryStatement->fetch();
//print_r($result);
        echo "</pre>";

        if(($resultSet)){
            $_SESSION['message'] = "Admin Deleted!";
        }
        else{
            $_SESSION['message'] = "Admin not Deleted!";
        }

    }

}