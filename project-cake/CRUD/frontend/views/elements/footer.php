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

    <!-- Footer Section Begin -->
    <footer class="footer ">
        <div class="container footer-bg ">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 footer__border">
                    <div class="footer__widget ">
                        <h6 class="text-left offset-1">WORKING HOURS</h6>
                        <ul class="text-left">
                            <li class="">Monday - Friday: 08:00 am – 08:30 pm</li>
                            <li class="">Saturday: 10:00 am – 16:30 pm</li>
                            <li class="">Sunday: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 footer__border">
                    <div class="footer__about text-center">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
                        <div class="footer__social">
                            <a href="#"></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 footer__border">
                    <div class="footer__widget footer__subscrib ">
                        <h6>Subscribe</h6>
                        <p>Get latest updates and offers.</p>
                        <form action="#" class="d-flex">
                            
                            <input class="form-control subs_email" type="text" placeholder="Email">
                                
                                <button class="btn " type="submit" >
                                    <i class="fas fa-paper-plane"></i></button>
                                
                                
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script type="text/javascript"> document.write(new Date().getFullYear())</script> All rights reserved |<br> <a class="text-light" href="https://github.com/marshmalow212" target="_blank">marshmalow212</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                  <div class="col-lg-5">
                    <div class="copyright__widget">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="link text-light" href="#">Privacy Policy</a></li>
                            <li class="list-inline-item"><a class="link text-light" href="#">Terms & Conditions</a></li>
                            <li class="list-inline-item"><a class="link text-light" href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
