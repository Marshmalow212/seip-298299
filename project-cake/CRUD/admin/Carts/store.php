<?php
include_once ("../../config.php");

use Crud\CartController;

$_carts = new CartController();

$resultSet = $_carts->store();

header("Location: ./index.php");