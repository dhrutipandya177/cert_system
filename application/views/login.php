<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>loginpage/assets/assets/img/favicon.png">
    <title>Billing</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginpage/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginpage/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>loginpage/assets/css/style.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
                <h3 class="account-title">Login</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href=""><img src="<?php echo base_url(); ?>loginpage/assets/img/logo2.png" alt="Preadmin"></a>
                        </div>
                         <span style="color:#F00"> <?php echo @$msg; ?></span>  
                          <form method="post" action="<?php echo base_url(); ?>welcome/login">
                            <div class="form-group form-focus">
                                <label class="control-label">E-mail</label>
                                <input class="form-control floating" type="email" name="email" value="">
                            </div>
                            <div class="form-group form-focus">
                                <label class="control-label">Password</label>
                                <input class="form-control floating" type="Password" name="password" value="">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-block account-btn" type="submit" name="submit" >Login</button>
                            </div>
                            <div class="text-center">
                                <!-- <a href="<?php echo base_url(); ?>admin/login/forgot_password">Forgot your password?</a> -->
                            </div>
                        </form>
                    </div>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>loginpage/assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>loginpage/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>loginpage/assets/js/app.js"></script>
</body>

</html>