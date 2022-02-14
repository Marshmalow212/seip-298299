<?php

?>



    <!-- top begin -->
    <section id="product__top">
        <div class="d-flex justify-content-between">
            <div class="page__title">
                <h2 class="fw-bold">Sign In</h2>
            </div>
            <!-- breadcrumb begin -->
            <div class="">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs-5">
                        <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                    </ol>
                </nav>
            </div>
            <!-- breadcrumb end -->

        </div>
    </section>
    <!--  top end -->



<!-- login form begin  -->
<section id="login__form">
    <div class="container d-flex justify-content-center">
    
    <form class="col-md-6 mt-2" method="post" action="<?=$projectRoot;?>CRUD/admin/Users/login.php" >
            <input type="hidden" name="id" value="">
            <div class="col-md-6">
                <label  class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
        
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-dark" >Sign In</button>
            </div>
            <div class="col-12 mt-2">
                <p>Not Registered? <a class="nav-link" href="signup.php">Sign up</a></p>
            </div>
        
        </form>
    </div>

</section>
<!-- login form end  -->
