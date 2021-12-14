<?php


$metadata = <<<META
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
META;

$title = <<<TITLE
<title>Email Template</title>
TITLE;

$link = <<<LINK
<link rel="stylesheet" href="style.css">
LINK;

$head = <<<HEAD
$metadata
$title
$link
HEAD;





$header = <<<HEADER
<!--header markup-->
    <section id="header" class="text-center pb-4">
        <h class="display-4 fw-bold">Welcome!</h>
        <p class="welcometext pt-2 pb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer </p>
        <div class="confirmaccountbutton"><button class="btn">Confirm Account</button></div>
    </section>

HEADER;

$middle = <<<MIDDLE

<!--middle markup-->
    <section id="middle">
        <p class="middletext">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the </p>
        <p class="middlelink"><a href="#">See what you can enjoy, let's surf</a></p>
    </section>

MIDDLE;

$footer = <<<FOOTER

<!--footer markup-->
    <section id="footer">
        <p class="footertext" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the </p>
        <p>Cheers,<br>The HR Team</p>
    </section>

FOOTER;

$emailtemplatebody = <<<ETB
<!--template body markup-->
<div id="emailtemplatebody">
$header
$middle
$footer
</div>
ETB;



?>




<!DOCTYPE html>
<html lang="en">
<head>

<?php echo $head; ?>

</head>
<body>

<?php echo $emailtemplatebody; ?>

</body>
</html>