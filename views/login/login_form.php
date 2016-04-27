<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SIPEG</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/img/plne.png">
</head>

<body id="mimin" class="dashboard form-signin-wrapper">
  <!--start: Content-->
      <div class="container">
	    <?php echo validation_errors(); ?>
        <form class="form-signin" method="post" action="<?php echo base_url(); ?>login/cek_login">
          <div class="panel periodic-login">
              <span class="atomic-number"></span>
              <div class="panel-body text-center">
                  <h1 class="atomic-mass">SIPEG</h1>
                  <p class="atomic-mass"></p>
                  <p class="element-name">sistem informasi pegawai enjiniring</p>                  				  
                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name='username' required autofocus>
                    <span class="bar"></span>
                   <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" name='password' required autofocus>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  
                  <input type="submit" class="btn col-md-12" value="Sign In"/>
              </div>
              
			  <div class="text-center" style="padding:5px;">
                <a href="#">Forgot Password </a>
                <a href="<?php echo base_url(); ?>login/sign_up">| Sign Up</a>
              </div>
          </div>
        </form>
      </div>
  <!-- end: Content -->
	  
  <!-- start: Javascript -->
  <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/jquery.ui.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/plugins/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/plugins/icheck.min.js"></script>

  <!-- custom -->
  <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
  	  $('input').iCheck({
        checkboxClass: 'icheckbox_flat-aero',
        radioClass: 'iradio_flat-aero'
      });
    });
  </script>
  <!-- end: Javascript -->

</body>
</html>