<?php
include_once ("../../config.php");

use Crud\UserController;
$_id = $_GET['id'];
$users = new UserController();

$users->update($_POST,$_id);

header("Location: index.php");