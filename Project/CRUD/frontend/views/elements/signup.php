<?php
//print_r($_POST);

?>


<form class="col-md-6 mt-2" method="post" >
    <input type="hidden" name="id" value="">
    <div class="col-md-6">
        <label  class="form-label">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="password">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="inputPassword4" name="fullname">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputPassword4" name="email">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="inputPassword4" name="phone">
    </div>


    <div class="col-12 mt-2">
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </div>
    <div class="col-12 mt-2">
        <p>Already Registered? <a class="nav-link" href="authenticator.php?page=login">Login</a></p>
    </div>
</form>