<?php

//template-header

$template_header = <<<TH
<div id="header">
    <div class="wrapper text-center pt-3 pb-3" >
        <p class="fs-4 fw-bold pt-3">This email template is now available</p>
        <p class="template-para pb-md-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <div class="template-header-button pb-4"><button class="btn btn-primary" type="button">Try it Today</button></div>
    </div>
    </div>
TH;

$template_middle =<<<TM
<!--middle part-->
<section id="middle-body">
    <div class="wrapper">

    </div>
</section>
TM;

$template_footer = <<<TF
<!--footer-->
<section id="footer">
    <div class="wrapper text-center pt-3 pb-3" >
        <p class="template-para pb-md-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
    </div>
</section>
TF;

$body_header = <<<BH
<!--header-->
<header id="template">
$template_header
$template_middle
$template_footer
</header>
BH;



$links = <<<LINK
<link rel="stylesheet" href="style.css">
LINK;





?>

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Email Template Practice</title>
    <?php echo $links; ?>
</head>
<body>
<?php echo $body_header; ?>
</body>
</html>