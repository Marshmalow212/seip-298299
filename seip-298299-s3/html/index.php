<?php

//$style = <<<INTERNAL_CSS
//<style>
//        @import url(../css/bootstrap.css);
//
//        p{
//            margin: 0;
//        }
//        /*style for wrapper*/
//        #wrapper{
//            width: 550px;
//            margin: 1rem auto ;
//            background-color: #f5f6fa;
//            padding: 1.25rem;
//        }
//        /*wrapper header styles*/
//        #wrapper header{
//            border-bottom: 1px solid #718093;
//        }
//        #wrapper header p{
//            text-align: center;
//            padding-bottom: 0.2rem;
//            font-weight: bold;
//        }
//
//        #wrapper header .free-shipping{
//            color: #e74c3c;
//            border-bottom: 1px solid #1a1e21;
//            letter-spacing: 0.25px;
//        }
//
//        #wrapper header .navbar-brand{
//            width:40%;
//            margin: auto;
//        }
//
//        #wrapper header #temp-body .shop-now {
//            width: 50%;
//            color: #1a1e21;
//
//        }
//        #wrapper header .discount{
//            margin:0;
//        }
//        #wrapper header .discount .styles{
//            font-size: 1.3rem;
//            font-weight:600;
//            letter-spacing: 0.1rem;
//            color: #6a1a21;
//        }
//        #wrapper header .discount .discount-forty {
//            font-size: 2rem;
//
//            color: #1a1e21;
//        }
//
//        #wrapper header .discount .shop-sale a{
//            font-size: 1.5rem;
//            color: #6b6b6b;
//            text-decoration: none;
//            border-bottom: 0.1rem solid #6b6b6b;
//        }
//        /*wrapper section styles*/
//
//        #wrapper #temp-body{
//            background-color: #c7dcef;
//            margin: 0.5rem auto;
//            text-align: center;
//        }
//
//        #wrapper #temp-body .shop-now button{
//            background-color: #1a1e21;
//            color: #f3f2f3;
//            border: none;
//            padding: 1rem;
//        }
//
//        #wrapper #temp-body .navbar-brand img{
//            padding: 0.5rem;
//            width: 10rem;
//        }
//
//        #wrapper #temp-body .theory{
//            font-family:Georgia, 'Times New Roman', Times, serif;
//
//        }
//        #wrapper #temp-body .theory-description{
//            font-weight: bold;
//            padding-right: 2rem ;
//            padding-left: 2rem;
//
//        }
//
//
//
//    </style>
//INTERNAL_CSS;

$style = null;

$head = null;
$warning = null;
if(isset($style)){
    if(empty($style)){
        $warning = 'Please Add Internal CSS<br>';
        $head = <<<EMAILTEMPHEADER
<head>
    <meta charset="UTF-8">
    <!-- view port meta link -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template - S2</title>
    <!-- Stylesheet link with bootstrap -->
<!--    <link href="style.css" rel="stylesheet">-->
    <!-- script method not needed here -->
    <!--<script src="../js/bootstrap.js"></script>-->
</head>
EMAILTEMPHEADER;
    }
    else{
        $head = <<<EMAILTEMPHEADER
<head>
    <meta charset="UTF-8">
    <!-- view port meta link -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template - S2</title>
    <!-- Stylesheet link with bootstrap -->
<!--    <link href="style.css" rel="stylesheet">-->
    <!-- script method not needed here -->
    <!--<script src="../js/bootstrap.js"></script>-->
    $style
</head>
EMAILTEMPHEADER;

    }
}

$wrapper_header = <<<WRAPPER_HEADER
<header class="pb-4 mb-3">
        <p class="free-shipping mb-3">FREE SHIPPING + FREE RETURN</p>
        <!--neiman marcus logo -->
        <div class="navbar-brand">
            <img class="img-fluid" src="../img/logo.svg" alt="logo.svg">
        </div>
        <div class="discount mt-3">
            <p class="styles">2,000+ STYLES JUST ADDED</p>
            <p class="discount-forty fw-bolder">UP TO 40% OFF</p>
            <p class="shop-sale fw-lighter"><a href="#">SHOP SALE &GT;&nbsp;</a></p>

        </div>
    </header>
WRAPPER_HEADER;

$wrapper_section = <<<WRAPPER_SECTION
<section id="temp-body" class="pb-3">
        <div class="navbar-brand">
            <img src="../img/logo_2.jpg" alt="logo_2.jpg" class="img-fluid">
        </div>
        <div>
            <p class="display-4 pb-2 theory">Theory</p>
            <p class="fs-6 theory-description">Relaxed styles capture the effortless spirit of the Mediterranean, including exclusives only found here</p>
        </div>
    
    <div class="text-center shop-now pt-3"><button type="button">SHOP NOW</button></div>

    </section>
WRAPPER_SECTION;


$wrapper = <<<WRAPPER
<div id="wrapper">
    <h1>$warning</h1>
    <!-- Markup for header -->
    $wrapper_header
    <!-- Markup for section -->
    $wrapper_section
</div>
WRAPPER;

$body = <<<EMAIL_TEMP_BODY
<body>
$wrapper
</body>
EMAIL_TEMP_BODY;

$head_body = <<<HEAD_BODY
$head
$body
HEAD_BODY;



?>


<!--HTML-->
<!DOCTYPE html>
<html lang="en">
<?php
//echo $head;
echo $head_body;
?>

</html>