<?php
$appRoot = $_SERVER['DOCUMENT_ROOT']."/seip-298299-s28/CRUD";

include_once ($appRoot."/config.php");

use Crud\BannerController;

$_banner = new BannerController();


$_banner->update();



header("Location: ./index.php");