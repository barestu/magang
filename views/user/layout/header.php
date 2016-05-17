<!-- start: Header -->
<body id="mimin" class="dashboard">
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="<?php echo base_url() ?>user/Dashboard" class="navbar-brand"> 
                 <b>SIPEG</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>
                <?php $notifikasi = $this->session->userdata('notifikasi'); ?>
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Selamat Datang, <?php echo $username; ?></span></li>
                  <li class="dropdown avatar-dropdown">                                    
                   <img src="<?php echo base_url() ?>asset/img/avatar.jpg" class="img-circle avatar" alt="user name" style="cursor:pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                   
                   <ul class="dropdown-menu user-dropdown">
                      <li role="separator" class="divider"></li>
                      <li><a href="<?php echo base_url(); ?>user/Pengaturan_akun"><span  class="fa fa-wrench "></span>  Pengaturan Akun</a></li>                     
                      <li role="separator" class="divider"></li>
                  </ul>
                  </li>              
                <li ><a <span class="fa fa-power-off" style="font-size:24px" data-toggle="modal" data-target="#myModal"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
<!-- end: Header -->