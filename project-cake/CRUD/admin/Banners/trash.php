<?php
include_once('../../config.php');
use Crud\BannerController;

$banners = new BannerController();
$show_id = $_GET['id'];
$banners->trash($show_id);
header("Location: ./index.php");
