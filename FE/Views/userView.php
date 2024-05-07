<?php
function LoginForm(){
    ?>
     <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 mx-auto">
                <h2 class="mb-4 text-center">Sign In</h2>
                <form name="loginFrm" id="login-frm" action="be/controllers/userController.php" method="POST">
                    <input type="hidden" name="action" value="LOGIN">
                    <div class="form-group">
                        <label for="tfun">Username</label>
                        <input id="tfun" type="text" class="form-control" name="tfun" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="tfpass">Password</label>
                        <input id="tfpass" type="password" class="form-control" name="tfpass" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-primary btn-block" value="Login" onclick="LoginFrm()">
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-secondary btn-block" value="Cancel" onclick="ResetFrm()">
                    </div>
                </form>
                <div class="text-center">
                    <span><a href="fe/pages/signup.php">Sign Up</a></span>
                </div>
            </div>
            <div class="col-md-6">
                <img src="assets/images/banner-image.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
        
    <?php
}
?>
