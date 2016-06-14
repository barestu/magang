<!--Konten Halaman Utama-->
          <!-- start:content -->
 <div id="content" class="kontent">               
                   
       <div class="panel box-shadow-none content-header" >
          <div class="panel-body">
            <div class="col-md-12">
        <h3 class="animated fadeInDown"><span class="icon-home"></span>
          Beranda 
        </h3>
              <h5 class="animated fadeInLeft">
                 Sistem Informasi Pegawai Enjiniring 
              </h5>
            </div>
          </div>
        </div>
<?php
 $jumlah = $organik + $pkwt;
$notifikasi = $this->session->userdata('notifikasi');
if(empty($notifikasi)){
	$notifikasi = '0';
} 
?>
				<div class="col-md-12 padding-0">
                   <div class="col-md-12 padding-4">
                      <div class="col-md-12">
                        <div class="panel chart-title bg-info text-white">
                          <h3 style="color:#ffffff;"><span class="fa fa-area-chart"></span>   Chart Data</h3>
                        </div>
                      </div>

                      <div class="col-md-6">
                          <div class="col-md-12">
                        			<div class="panel">
                             <div class="panel-heading-white panel-heading text-center border-none">
                                <h5><span class="fa fa-pie-chart"></span> Status Pegawai PLNE</h5>
                              </div>
                              <div class="panel-body">
                                  <center>
                                  <canvas class="doughnut-chart2"></canvas>
                                  <div class="col-md-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <h3><?php echo $jumlah;?></h3>
                                      <p>Jumlah Pegawai PLNE</p>
                                    </div>                                    
                                  </div>
                                  </center>
                              		</div>
                        		  </div>
                    		    </div>                         

                    		<div class="col-md-12">
                        			<div class="panel">
                             <div class="panel-heading-white panel-heading text-center border-none">
                                <h5><span class="fa fa-pie-chart"></span> Pegawai PKWT</h5>
                              </div>
                              <div class="panel-body">
                                  <center>
                                  <canvas class="doughnut-chart"></canvas>
                                  <div class="col-md-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <h3><?php echo $pkwt;?></h3>
                                      <p>Jumlah Pegawai PKWT</p>
                                    </div>                                    
                                  </div>
                                  </center>
                              		</div>
                        		</div>
                    		</div>
                      </div>  

                      <div class="col-md-6 right">
                       <div class="col-md-12">
                              <div class="panel">
                             <div class="panel-heading-white panel-heading text-center border-none">
                                <h5><span class="fa fa-pie-chart"></span> Kompetensi PLNE</h5>
                              </div>
                              <div class="panel-body">
                                  <center>
                                  <canvas class="pie-chart2"></canvas>
                                  <div class="col-md-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3><?php echo $jumlah_bidang;?></h3>
                                      <p>Total Bidang</p>
                                    </div>                                    
                                  </div>
                                  </center>
                                  </div>
                              </div>
                            </div> 
                     
                        <div class="col-md-12">
                              <div class="panel">
                             <div class="panel-heading-white panel-heading text-center border-none">
                                <h5><span class="fa fa-pie-chart"></span> Jabatan PLNE</h5>
                              </div>
                              <div class="panel-body">
                                  <center>
                                  <canvas class="pie-chart"></canvas>
                                  <div class="col-md-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3><?php echo $jumlah_jabatan;?></h3>
                                      <p>Total Jabatan</p>
                                    </div>                                    
                                  </div>
                                  </center>
                                  </div>
                              </div>
                            </div>
                          </div>

               		</div>
               </div>                       
            </div>       
          <!-- end: content -->
