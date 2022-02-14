<?php
include_once ("../../config.php");

if(!array_key_exists('user_id',$_SESSION)){
    header('location: login.php');
}

use Crud\CartController;

$_carts = new CartController();
$uid = $_SESSION['user_id'];
$resultSet = $_carts->showMyCart($uid);

?>

<?php
include_once ("../views/elements/head.php");
?>
<body>
<?php
include_once ("../views/elements/header.php");
include_once ("../views/elements/cart-list.php");
include_once ("../views/elements/footer.php");
include_once ("../views/elements/scripts.php");

?>
</body>
</html>
