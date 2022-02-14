<?php
include_once ("../../config.php");

use Crud\CartController;

$_carts = new CartController();

$_carts->addToCart();

header('location:'.$projectRoot.'CRUD/frontend/public/cart.php');