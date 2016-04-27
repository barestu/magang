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

        <form class="form-signin" action="<?php echo base_url(); ?>login/input_sign_up" method="post" autocomplete="off">
          <div class="panel periodic-login">
              <span class="atomic-number"></span>
              <div class="panel-body text-center">
                  <h1 class="atomic-mass">SIPEG</h1>
                  <p class="atomic-mass"></p>
                  <p class="element-name">sistem informasi pegawai enjiniring</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name='username' required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" id="txtPassword" pattern=".{6,}" title="6 atau lebih karakter" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" name='password' id="txtConfirmPassword" pattern=".{6,}" title="6 atau lebih karakter" required>
                    <span class="bar"></span>
                    <label>Konfirmasi Password</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name='nip' required>
                    <span class="bar"></span>
                    <label>NIP</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name='email' required>
                    <span class="bar"></span>
                    <label>Email</label>
                  </div>                  
                   <?php
                            foreach($id->result_array() as $row);
                            $nextid = $row['max']; $nextid = $nextid+1;
                    ?>
                    <input type="hidden" class="form-text" name='id_user_login' 
                    value="<?php echo $nextid; ?>">
                    <span class="bar"></span>
                   
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1" required/> &nbsp Agree the terms and policy
                  </label>
                  <input type="submit" class="btn col-md-12" onclick="return Validate()" value="Daftar"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="<?php echo base_url(); ?>login/index">Sudah Punya Akun?</a>
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
        function Validate() {
            var password = document.getElementById("txtPassword").value;
            var confirmPassword = document.getElementById("txtConfirmPassword").value;
            if (password != confirmPassword) {
                alert("Konfirmasi Password Tidak Cocok.");
                return false;
            }
            return true;
        }
        <!---->
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