<!-- start: Header -->
<body id="mimin" class="dashboard">

<div class="container invoice invoice-v1">

     <nav class="navbar navbar-default header invoice-v1-tool container navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
                <a href="<?php echo base_url() ?>admin/Dashboard" class="navbar-brand"><span class="fa fa-chevron-left" style="font-size:28px"></span>
                </a>

              <ul class="nav navbar-nav navbar-right user-nav">
                   <!--<li class="user-name"><span>Selamat Datang, <?php echo $username; ?></span></li>-->
                <li>
                      <button class="btn btn-3d btn-danger" onclick="printDiv('printableArea')" style="margin-top:8px;">Print</button>
                     </li>                  
                <li ><a <span class="fa fa-power-off" style="font-size:24px" data-toggle="modal" data-target="#myModal"></span></a></li>                
              </ul>
            </div>
          </div>
        </nav>
        <!-- end: Header -->