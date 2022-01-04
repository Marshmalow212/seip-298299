<?php
include_once ("./../../config.php");

use Crud\AdminController;

$_admins = new AdminController();

$_admins->update();

header("Location: index.php");