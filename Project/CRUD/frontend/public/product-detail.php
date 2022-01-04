<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>E-Commerce</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--<script type="text/javascript" oop="jquery.js"></script>-->

</head>
<body>

<!--markup for header-->
<header>
    <div class="container">

    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!--<a class="navbar-brand" href="#">Navbar</a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ecommerceNav" aria-controls="ecommerceNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-button"><i class="fas fa-bars "></i></span>
            </button>
            <div class="collapse navbar-collapse" id="ecommerceNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">LIVING ROOM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DINING & BAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BEDROOM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">KITCHEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME IMPROVEMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CUSTOM</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
</header>
<!--markup for breadcrumb-->
<section>
    <div class="container mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Grandpa Rocking Chair</li>
            </ol>
        </nav>
    </div>
</section>
<!--markup for wrapper-->
<section id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <div class="large-5 column">
                        <div class="xzoom-container"> <img class="xzoom" id="xzoom-default" src="img/product2-700x850.jpg" xoriginal="img/product2-700x850.jpg" />
                            <div class="xzoom-thumbs">
                                <a href="https://i.imgur.com/uC0mRJc.jpg">
                                    <img class="xzoom-gallery" width="80" src="https://i.imgur.com/vfPagtf.jpg" xpreview="https://i.imgur.com/b7R8dRr.jpg"></a>
                                <a href="https://i.imgur.com/oNaczTl.jpg"> <img class="xzoom-gallery" width="80" src="https://i.imgur.com/r03r46u.jpg"> </a>
                                <a href="https://i.imgur.com/853Jrff.jpg"><img class="xzoom-gallery" width="80" src="https://i.imgur.com/BpfNBDk.jpg"></a>
                                <a href="https://i.imgur.com/Q7xvBFf.jpg"><img class="xzoom-gallery" width="80" src="https://i.imgur.com/3SuUpUH.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">

            </div>


        </div>
    </div>

</section>


<!-- ==============all scripts================== -->


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
<!-- <script src='https://code.jquery.com/jquery-2.1.1.js'></script>
<script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>
<script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/xzoom.min.js"></script>
<link rel="stylesheet" type="text/css" href="xZoom.css" media="all" />
<script src="xZoom.js" type="text/javascript"></script>



</body>
</html>