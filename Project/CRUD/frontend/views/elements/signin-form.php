<?php

?>


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