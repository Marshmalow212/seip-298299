<?php
include_once ("../../config.php");
use Crud\CartController;

//print_r($_GET);

$show_id = $_GET['id'];
$carts = new CartController();

$carts->deleteFromCart($show_id);


header('location:'.$projectRoot.'CRUD/frontend/public/cart.php');
