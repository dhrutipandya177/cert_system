

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admission</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>loginpage/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginpage/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginpage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginpage/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginpage/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginpage/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginpage/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginpage/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginpage/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                
                    <span class="login100-form-title p-b-55">
                        Login
                    </span>
                    <span style="color:#F00"> <?php echo @$msg; ?></span>
                    <form class="login100-form validate-form" method="post" action="<?php echo base_url(); ?>welcome/login">
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-envelope"></span>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>

                    <div class="contact100-form-checkbox m-l-4">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                    
                    <div class="container-login100-form-btn p-t-25">
                        <!-- <button class="login100-form-btn">
                            Login
                        </button> -->
                        <input type="submit" value="Login" class="login100-form-btn" name="submit"/>
                    </div>
                </form>
                    <div class="text-center w-full p-t-42 p-b-22">
                        <span class="txt1">
                            Or login with
                        </span>
                    </div>

                    <!-- <a href="#" class="btn-face m-b-10">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a> -->

                    <!-- <a href="#" class="btn-google m-b-10">
                        <img src="<?php echo base_url(); ?>loginpage/images/icons/icon-google.png" alt="GOOGLE">
                        Google
                    </a> -->

                    <div class="text-center w-full p-t-115">
                        <span class="txt1">
                            Not a member?
                        </span>

                        <a class="txt1 bo1 hov1" href="#">
                            Sign up now                         
                        </a>
                    </div>
                
            </div>
        </div>
    </div>
    
    
<script>
    
   if (document.getElementById("yellow") != null) {
    setTimeout(function() {
      document.getElementById('yellow').style.display = 'none';
    }, 5000);
  }
</script>
    
<!--===============================================================================================-->  
    <script src="<?php echo base_url(); ?>loginpage/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>loginpage/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>loginpage/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>loginpage/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>loginpage/js/main.js"></script>

</body>
</html>