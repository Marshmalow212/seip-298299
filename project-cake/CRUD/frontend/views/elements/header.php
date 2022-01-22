<?php

use Crud\CartController;
$cart_items = 0;
$uid = $_SESSION['user_id']??null;
$carts = new CartController();
$cart_res =count( $carts->showMyCart($uid))??0;
//echo $cart_res;   
$cart_total_amount = $carts->myTotalAmount($uid)??0;
$cart_total_amount = number_format((float)$cart_total_amount,2,'.','');
//echo $cart_total_amount;
?>

<?php
if(array_key_exists('message',$_SESSION) && $_SESSION['message']!=''):
    ?>
    <div class="alert alert-success">

        <div>
            <?php
            echo $_SESSION['message'];
            $_SESSION['message']="";
            ?>
        </div>
    </div>
<?php
endif;
?>


<!--header begin-->
<header>
    <!-- header-container begin -->
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                <div class="col-md-4">
                        <div class="row left__top">
                            <div class="col-3">
                                <div class="country">
                                    <select class="form-select form-select-sm border-0 mt-2" aria-label=".form-select-sm example">
                                        <option value="english" selected>English</option>
                                        <option value="bengali">Bengali</option>
                                        <option value="french">French</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="currency">
                                    <select class="form-select form-select-sm border-0 mt-2" aria-label=".form-select-sm example">
                                        <option value="us-doller" selected>USD</option>
                                        <option value="taka">BDT</option>
                                        <option value="euro">EUR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="sign-in ">
                                    <?php
                                    if(array_key_exists('user_id',$_SESSION) && $_SESSION['user_id']!=''):
                                    ?>
                                    <a class="nav-link" href="logout.php">Sign Out</a>
                                    <?php
                                    else:
                                        ?>
                                    <a class="nav-link" href="login.php">Sign In</a>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="logo text-center mt-4">
                            <a href="index.php" class="navbar-brand">
                                <img src="img/logo.png" alt="logo.png" class="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row g-3 right__top">
                            <div class="col-md offset-2 search__switch">

                                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                            </div>
                            <div class="col-md wish__list">

                                <a href="#"><img src="img/icon/heart.png" alt=""></a>
                            </div>
                            <div class="col-md-6 cart__switch">
                                <div class="d-flex">
                                    <a href="cart.php"><img src="img/icon/cart.png" alt=""> <span><?=$cart_res?></span></a>
                                    <div class="cart__price">Cart: <span>&dollar;<?=$cart_total_amount?></span></div>

                                </div>
                                
                            </div>
                        </div>
                     
                    
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
    <!-- header-container end  -->
    <!-- navbar begin -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0 " >
        <div class="container offset-3 ">
            <!--<a class="navbar-brand" href="#">Navbar</a>-->
            
                <button class="navbar-toggler offset-11 " type="button" data-bs-toggle="collapse" data-bs-target="#ecommerceNav" aria-controls="ecommerceNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-button"><i class="fas fa-bars "></i></span>
                </button>

            
            <div class="collapse navbar-collapse  " id="ecommerceNav">
                <ul class="navbar-nav me-auto mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>


                </ul>

            </div>
            
        </div>
    </nav>
    <!-- navbar end -->
</header>
<!-- header end -->
