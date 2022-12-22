<?php 
require_once("header.php");
require_once("navbar.php");
?>

<!-- create for register form -->
<div class="container mt-5">
            <div class="row">
                <div class="col-md-5 bg-dark">
                    <h1 class="text-white p-3">Contact Us!</h1>
                    <p class="text-white p-2">Login with flipkart we provides 24x7 hrs services and good offers also so hurry up to create your account with us</p>
                    <p><img src="images/login.png" class="img-fluid"></p>
                </div>
                <div class="col-md-7">
                    <form method="post" action="mail.php" class="p-5">
                        
                    <div class="from-group mt-1 p-2">
                            <input type="text" name="name" placeholder="Enter  Name" required class="form-control password">
                         
                        </div>
                        <div class="from-group mt-1 p-2">
                            <input type="text" name="email" placeholder="Enter email/mobile number" required class="form-control email">
                        </div>
                        <div class="from-group mt-1 p-2">
                            <input type="text" name="fname" placeholder="Enter  firstname" required class="form-control password">
                         
                        </div>

                        <div class="from-group mt-1 p-2">
                            <input type="text" name="lname" placeholder="Enter  Lastname" required class="form-control password">
                         
                        </div>

                        <div class="from-group mt-1 p-2">
                            <input type="text" name="phone" placeholder="Enter  Mobile" required class="form-control password">
                         
                        </div>

                        <div class="from-group mt-1 p-2">
                            <textarea  name="message" placeholder="Enter Address" required class="form-control password"></textarea>
                         
                        </div>

                   
                        <div class="form-group mt-1 p-2">
                            <p>By continuing, you agree to Flipkart's <a href="#">Terms of Use and Privacy Policy.</a></p>
                        </div>
                        <div class="form-group mt-3 p-2">
                            <input type="submit" name="send" id="btn-log-register" class="btn btn-sm" value="Send">
                            <input type="reset" name="reset" id="btn-log-reset" class="btn btn-sm" value="Reset">
                        </div>

                     
                    </form>
                </div>
            </div>
</div>
<?php 
require_once("footer.php");
require_once("login.php");
?>
