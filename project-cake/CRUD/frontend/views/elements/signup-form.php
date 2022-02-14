<?php
//print_r($_POST);
$formData=[];
if(array_key_exists('formdata',$_GET)){
    $formData = $_GET['formdata'];
    $formData = unserialize($formData);
//    print_r($formData);
}
?>

<?php
if(array_key_exists('message',$_SESSION) && $_SESSION['message']!=''):
    ?>
<div class="alert alert-danger">

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


    <!-- top begin -->
    <section id="product__top">
        <div class="d-flex justify-content-between">
            <div class="page__title">
                <h2 class="fw-bold">Sign Up</h2>
            </div>
            <!-- breadcrumb begin -->
            <div class="">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs-5">
                        <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                    </ol>
                </nav>
            </div>
            <!-- breadcrumb end -->

        </div>
    </section>
    <!--  top end -->


<!-- sign up form begin  -->
<section id="sign__up">
    <div class="container d-flex justify-content-center">
        <form class="col-md-6 mt-2" method="post" action="<?=$projectRoot;?>CRUD/admin/Users/signup.php"  >
            <input type="hidden" name="id" value="">
            <div class="col-md-6">
                <label  class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="<?=array_key_exists('username',$formData)?$formData['username']:''?>">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password" value="<?=array_key_exists('password',$formData)?$formData['password']:''?>">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="inputPassword4" name="fullname" value="<?=array_key_exists('fullname',$formData)?$formData['fullname']:''?>">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputPassword4" name="email" value="<?=array_key_exists('email',$formData)?$formData['email']:''?>">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="inputPassword4" name="phone" value="<?=array_key_exists('phone',$formData)?$formData['phone']:''?>">
            </div>
        
        
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-dark">Sign Up</button>
            </div>
            <div class="col-12 mt-2">
                <p>Already Registered? <a class="nav-link" href="login.php">Login</a></p>
            </div>
        </form>

    </div>
</section>
<!-- signup form end  -->