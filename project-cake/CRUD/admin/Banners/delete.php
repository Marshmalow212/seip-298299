<?php

include_once ('../../config.php');

use Crud\BannerController;

$_banner = new BannerController();

$show_id = $_GET['id'];
$_banner->delete($show_id);


header("Location: trashlist.php");
