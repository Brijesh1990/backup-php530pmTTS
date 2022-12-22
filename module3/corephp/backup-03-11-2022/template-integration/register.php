<?php 
require_once("header.php");
require_once("navbar.php");
?>

<!-- create for register form -->
<div class="container mt-5">
            <div class="row">
                <div class="col-md-5 bg-dark">
                    <h1 class="text-white p-3">Create Account with us!</h1>
                    <p class="text-white p-2">Login with flipkart we provides 24x7 hrs services and good offers also so hurry up to create your account with us</p>
                    <p><img src="images/login.png" class="img-fluid"></p>
                </div>
                <div class="col-md-7">
                    <form method="post" class="p-5">
                        <div class="from-group mt-1 p-2">
                            <input type="text" name="email" placeholder="Enter email/mobile number" required class="form-control email">
                        </div>
                        <div class="from-group mt-1 p-2">
                            <input type="password" name="pass" placeholder="Enter Password" required class="form-control password">
                         
                        </div>
                     
                        <div class="from-group mt-1 p-2">
                            <input type="password" name="cpass" placeholder="Enter Confirm Password" required class="form-control password">
                         
                        </div>

                        <div class="from-group mt-1 p-2">
                            <input type="file" name="image" placeholder="upload image" required class="form-control password">
                         
                        </div>

                        <div class="from-group mt-1 p-2">
                            <input type="text" name="phone" placeholder="Enter  Mobile" required class="form-control password">
                         
                        </div>

                        <div class="from-group mt-1 p-2">
                            <textarea  name="address" placeholder="Enter Address" required class="form-control password"></textarea>
                         
                        </div>

                        <div class="from-group mt-1 p-2">
                            <select  name="state" placeholder="Enter state" required class="form-control password">
                              <option value="">-select state-</option>
                              <option value="">Gujrat</option>
                            </select>
                        </div>
                        <div class="from-group mt-1 p-2">
                            <select  name="city" placeholder="Enter city" required class="form-control password">
                              <option value="">-select city-</option>
                              <option value="">Rajkot</option>
                            </select>
                        </div>
                        <div class="form-group mt-1 p-2">
                            <p>By continuing, you agree to Flipkart's <a href="#">Terms of Use and Privacy Policy.</a></p>
                        </div>
                        <div class="form-group mt-3 p-2">
                            <input type="submit" name="register" id="btn-log-register" class="btn btn-sm" value="Register">
                            <input type="reset" name="reset" id="btn-log-reset" class="btn btn-sm" value="Reset">
                        </div>

                        <div class="form-group mt-1 p-2">
                            <p>Already have an account <a href="#" data-bs-toggle="modal" data-bs-target="#login-load">Create Login here ?</a></p>
                        </div>
                    </form>
                </div>
            </div>
</div>
<?php 
require_once("footer.php");
require_once("login.php");
?>
