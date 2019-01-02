<!DOCTYPE html>
<html>

<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Aug 2018 12:35:58 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Login</title>
    <!-- google font -->
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
body#LoginForm{background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}

.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}



@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;

        /* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
    }
}

@media only screen and (max-width: px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;

        /* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
    }
}


</style>
</head>
<body style="background-image:url(assets/frontend/images/register.jpg); background-size: 100%;background-repeat: no-repeat;background-position: center;">
    <div class="container">
<div class="login-form" style="padding-top: 100px;">
<div class="main-div">
    <div class="panel" style="padding-top: 15px;">
      <img src="<?php echo base_url();?>assets/frontend/images/logo.png">
   <h2>Login</h2>
   <p>Please enter your Username and password</p>
   </div>
   <?php if( $error = $this->session->flashdata('login_failed')): ?>
          <div class="alert alert-danger">
            <?= $error ?>
          </div>    
          <?php endif; ?>
   <?php echo form_open('LoginController/login'); ?>
    <form id="Login">

        <div class="form-group">


            
            <?php echo form_input(['class'=>'form-control','name'=>'username','placeholder'=>'Username']) ?>

        </div>

        <div class="form-group">
            <?php echo form_password(['class'=>'form-control','name'=>'password','placeholder'=>'Password']) ?>
    

        </div>
        
        <?php echo form_submit(['class'=>'btn btn-success button','name'=>'Submit','value'=>'Login']) ?>

    </form>
    </div>
</div></div></div>
</body>
</html>