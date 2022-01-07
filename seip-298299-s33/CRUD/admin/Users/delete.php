<?php
include_once ("./../../config.php");

use Crud\UserController;
$show_id = $_GET['id'];
$users = new UserController();

$users->delete($show_id);
header("Location: index.php");
