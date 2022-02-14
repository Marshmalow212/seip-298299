<?php




namespace Crud;
include_once ("./../../config.php");
use PDO;

class BannerController
{
    public $conn = null;
    public function __construct()
    {
        //database connection to ecommerce

        $this->conn = databaseConnection();
//PDO error exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->uploadDir = uploadDirectory();

    }
//index function
    public function index(){

        echo "<pre>";


        $selectQuery = "select * from banners where soft_delete=0;";


        $queryStatement = $this->conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute();

        $resultSet = $queryStatement->fetchAll();

//print_r($resultSet);

        echo "</pre>";
        return $resultSet;
    }

public function getActiveBanners(){

        echo "<pre>";


        $selectQuery = "select * from banners where is_active=1 LIMIT 0,3;";


        $queryStatement = $this->conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute();

        $resultSet = $queryStatement->fetchAll();

//print_r($resultSet);

        echo "</pre>";
        return $resultSet;
    }


//    store function
    public function store(){

        echo "<pre>";
        var_dump($_POST);
        var_dump($_FILES);

        $isActive = $isDraft = $softDelete = $maxDisplay = 0;


        if(array_key_exists('is_active',$_POST))$isActive = 1;
        if(array_key_exists('is_draft',$_POST))$isDraft = 1;
        if(array_key_exists('soft_delete',$_POST))$softDelete = 1;
        if(array_key_exists('max_display',$_POST))$maxDisplay = 1;

        $pictureName = $this->upload();

        if($this->conn){
            echo 'Database Connection Successful!<br>';
        }
        else echo 'Please Connect database first!<br>';



        $insertQuery = "INSERT INTO banners (title,picture,link,promotional_message,is_active,is_draft,soft_delete,max_display,created_at) VALUES (?,?,?,?,?,?,?,?,?);";

        $queryStatement = $this->conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$_POST['title']);


        $queryResult = $queryStatement->execute([$_POST['title'],$pictureName,$pictureName,$_POST['promotional_message'],$isActive,$isDraft,$softDelete,$maxDisplay,$_POST['created_at']]);

        if($queryResult){
            $_SESSION['message'] = "Banner Inserted!";
        }
        else{
            $_SESSION['message'] = "Banner not Inserted!";
        }

        echo "</pre>";


    }


//show function
    public function show(){


        $show_id = $_GET['id'];

        $showQuery = "select * from banners where id = ?";

        $queryStatement = $this->conn->prepare($showQuery);

        $resultSet = $queryStatement->execute([$show_id]);

        $result = $queryStatement->fetch();
//print_r($result);

        return $result;

    }


//    update function

    public function update(){

        $_id = $_GET['id'];
        $isActive = $isDraft = $softDelete = $maxDisplay = 0;


        if(array_key_exists('is_active',$_POST))$isActive = 1;
        if(array_key_exists('is_draft',$_POST))$isDraft = 1;
        if(array_key_exists('soft_delete',$_POST))$softDelete = 1;
        if(array_key_exists('max_display',$_POST))$maxDisplay = 1;

        $pictureName = $this->upload();

        if($this->conn){
            echo 'Database Connection Successful!<br>';
        }
        else echo 'Please Connect database first!<br>';

        $updateQuery = "Update banners set title=?,picture=?,link=?,promotional_message=?,is_active=?,is_draft=?,soft_delete=?,max_display=?,created_at=? where id=?;";
        $queryStatement = $this->conn->prepare($updateQuery);
        $queryResult = $queryStatement->execute([$_POST['title'],$pictureName,$pictureName,$_POST['promotional_message'],$isActive,$isDraft,$softDelete,$maxDisplay,$_POST['created_at'],$_id]);


        if(($queryResult)){
            $_SESSION['message'] = "Banner Updated!";
        }
        else{
            $_SESSION['message'] = "Banner not updated!";
        }
        echo "</pre>";


    }


//    edit function

    public function edit(){

        $show_id = $_GET['id'];

        $showQuery = "select * from banners where id = ?";

        $queryStatement = $this->conn->prepare($showQuery);

        $resultSet = $queryStatement->execute([$show_id]);

        $result = $queryStatement->fetch();
//print_r($result);

        return $result;

    }

//    delete function

    public function delete($show_id){

//print_r($_GET);

        $deleteQuery = "delete from banners where id = ?";

        $queryStatement = $this->conn->prepare($deleteQuery);

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

    }

    public function trash($show_id){
        echo "<pre>";

//print_r($_GET);

// $show_id = $_GET['id'];

$deleteQuery = "update banners set soft_delete=1 where id = ?";

$queryStatement = $this->conn->prepare($deleteQuery);

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

    }


    public function getTrash()
    {
        echo "<pre>";



// if(!empty($_GET['id'])){
//     $trashId = $_GET['id'];
//     $queryResult = ($conn->prepare("Update banners set soft_delete=0 where id=?"))->execute([$trashId]);
// }


$selectQuery = "select * from banners where soft_delete=1";

$queryStatement = $this->conn->prepare($selectQuery);

$queryResult = $queryStatement->execute();

$resultSet = $queryStatement->fetchAll();

return $resultSet;

//print_r($resultSet);

echo "</pre>";
    }

    private function upload(){
        $pictureName = null;
        if(!empty($_FILES['picture']['name'])){
            $pictureName ='IMG_'.time().'_'.$_FILES['picture']['name'];
            $target = $_FILES['picture']['tmp_name'];
            $destination = ($this->uploadDir).$pictureName;
            $link = move_uploaded_file($target,$destination);
        }
        else{
            if(!empty($_POST['picture'])) $pictureName = $_POST['picture'];
        }

        return $pictureName;
    }

}