<?php
?>

<!--markup for header-->
<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="d-none d-sm-block">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="country">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected></option>
                                            <option value="english" selected>English</option>
                                            <option value="bengali">Bengali</option>
                                            <option value="french">French</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="currency">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected></option>
                                            <option value="us-doller" selected>USD</option>
                                            <option value="taka">BDT</option>
                                            <option value="euro">EUR</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="welcome-text">
                                        <p>welcome to ecommerce</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 offset-2">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="authenticator.php"><i class="far fa-user"></i> My Account</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-heart"></i> My Wishlist</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-check-circle"></i> Checkout</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-comments"></i> Blog</a>
                                </li>
                                <li class="nav-item">
                                    <?php
                                    if(is_array($_SESSION) && array_key_exists('user_id',$_SESSION) && !empty($_SESSION['user_id'])):
                                    ?>
                                    <a class="nav-link" href="authenticator.php?logout"><i class="fas fa-lock"></i> Logout</a>
                                    <?php

                                    else:
                                    ?>
                                    <a class="nav-link" href="user.php?page=login" ><i class="fas fa-lock"></i> Login</a>
                                    <?php
                                    endif;
                                    ?>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-block d-sm-none">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="country">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected></option>
                                            <option value="english" selected>English</option>
                                            <option value="bengali">Bengali</option>
                                            <option value="french">French</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="currency">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected></option>
                                            <option value="us-doller" selected>USD</option>
                                            <option value="taka">BDT</option>
                                            <option value="euro">EUR</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="welcome-text">
                                        <p>welcome to ecommerce</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-8 offset-2">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="#"><i class="far fa-user"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-check-circle"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-comments"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-lock"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-2">
            <div class="d-none d-sm-none d-md-block">

                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.php" class="navbar-brand">
                                <img src="img/logo.png" alt="logo.png" class="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7 offset-2">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Delivery Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="search" placeholder="search">
                                    <span class="input-group-text" ><i class="fas fa-search"></i></span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-danger text-light" href="#">
                                    <span><i class="fas fa-shopping-cart"></i></span>
                                    <span class="cart-count">0</span>
                                    Cart /
                                    <span class="cart-amount">&dollar;0.00</span></a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-block d-md-none">

                <div class="row">
                    <div class="col-sm-3 offset-4">
                        <div class="logo">
                            <a href="index.php" class="navbar-brand">
                                <img src="img/logo.png" alt="logo.png" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!--<div class="col-sm-7 offset-2">-->
                    <!--<ul class="nav">-->
                    <!--<li class="nav-item">-->
                    <!--<a class="nav-link " href="#">About us</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--<a class="nav-link" href="#">Delivery Information</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--<a class="nav-link" href="#">Privacy Policy</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--<div class="input-group input-group-sm mb-3">-->
                    <!--<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="search" placeholder="search">-->
                    <!--<span class="input-group-text" ><i class="fas fa-search"></i></span>-->
                    <!--</div>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--<a class="nav-link btn btn-danger text-light" href="#">-->
                    <!--<span><i class="fas fa-shopping-cart"></i></span>-->
                    <!--<span class="cart-count">0</span>-->
                    <!--Cart /-->
                    <!--<span class="cart-amount">&dollar;0.00</span></a>-->
                    <!--</li>-->


                    <!--</ul>-->
                    <!--</div>-->
                </div>
            </div>

        </div>
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
