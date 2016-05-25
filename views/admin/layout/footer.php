<!-- start: Javascript -->
    <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/jquery.ui.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
   
    <!-- plugins -->
    <script src="<?php echo base_url(); ?>asset/js/plugins/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/plugins/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/plugins/jquery.nicescroll.js"></script>  
    <script src="<?php echo base_url(); ?>asset/js/plugins/jquery.datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/plugins/datatables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/plugins/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/plugins/icheck.min.js"></script>
	
	<!-- buat logout -->
	<div id="content">
        <div class="modal fade modal-v2" id="myModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Peringatan</h4>
              </div>
              <div class="modal-body">
                <h4 align="center">Keluar Akun?</h4>
              </div>
              <div class="modal-footer">
                <a href="<?php echo base_url(); ?>admin/Dashboard/logout" class="btn btn-danger" role="button">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>          
             </div>
            </div>
          </div>
        </div>
	</div>
	
    <!-- upload gambar -->
    <div id="content">
        <div class="modal fade modal-v2" id="mygambar" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Gambar (400 x 500 px) max.100kb</h4>
              </div>
              <div class="modal-body">
                <form action="<?=base_url()?>admin/Upload_gambar?id=<?php echo $data_peg['id_peg'];?>" method="post" enctype="multipart/form-data">
                <input class="btn btn-info" type="file" name="ava" />
              </div>
              <div class="modal-footer">
                <div class="col-sm-3 right"><input class="btn btn-info" type="submit" value="Ganti Foto"/></div>
                <div><button class="btn btn-default" type="reset">Reset</button></div>          
             </div>
             </form>
            </div>
          </div>
        </div>
    </div>

    <!-- custom -->
     <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
     <script type="text/javascript">
        
        $(document).ready(function(){
        $('#datatables-example').DataTable();
        });     

        function Validate() {
            var password = document.getElementById("txtPassword").value;
            var confirmPassword = document.getElementById("txtConfirmPassword").value;
            if (password != confirmPassword) {
                alert("Konfirmasi Password Tidak Cocok.");
                return false;
            }
            return true;
        }
   
	 
        // start: Calendar =========
         $('.dashboard .calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '2015-02-12',
            businessHours: true, // display business hours
            editable: true,
        });
        // end : Calendar==========
     </script>

     <script type="text/javascript">
      (function(jQuery){

   <?php
      $notifikasi = $this->session->userdata('notifikasi');
        if($notifikasi < 1){
          $notifikasi = 0 ;
        }
        
      $sisa_pkwt = $pkwt - $notifikasi;
      echo "var jml_kontrak={$notifikasi}
       var jml_pkwt={$pkwt}
       var jml_organik={$organik}
       var sisa_pkwt={$sisa_pkwt}
       var direksi={$direksi}
       var pemasaran={$pemasaran}
       var pengembangan_usaha={$pengembangan_usaha}
       var pengusahaan={$pengusahaan}
       var pembangkit={$pembangkit}
       var t_dan_d={$t_dan_d}
       var konstruksi={$konstruksi}
       var keuangan={$keuangan}
       var akuntansi={$akuntansi}
       var sdm={$sdm}
       var umum={$umum}
       var hukum={$hukum}
       var humas={$humas}
       var pengadaan={$pengadaan}
       var audit_internal={$audit_internal}
       var mmr={$mmr}
       var pengawas_internal={$pengawas_internal}
       var informasi_teknologi={$informasi_teknologi}";
    ?>;
         
        var doughnutData = [
                
                {
                    value: jml_pkwt,
                    color: "rgba(21,186,103,0.4)",
                    highlight: "rgba(220,220,220,1)",
                    label: "Pegawai PKWT"
                },
                {
                    value: jml_organik,
                    color: "#94D7E9",
                    highlight: "rgba(220,220,220,1)",
                    label: "Pegawai Organik"
                }

            ];

        var doughnutData2 = [
                
                {
                    value: sisa_pkwt,
                    color: "#94D7E9",
                    highlight: "rgba(220,220,220,1)",
                    label: "PKWT Periode Aman"
                },
                {
                    value: jml_kontrak,
                    color: "rgba(21,186,103,0.4)",
                    highlight: "rgba(220,220,220,1)",
                    label: "PKWT Akhir Kontrak"
                }

            ];

        var doughnutData3 = [
                
                {
                    value: direksi,
                    color: "#94D7E9",
                    highlight: "rgba(220,220,220,1)",
                    label: "Direksi"
                },
                {
                    value: pemasaran,
                    color: "#FFDF42",
                    highlight: "rgba(220,220,220,1)",
                    label: "Pemasaran"
                },
                {
                    value: pengembangan_usaha,
                    color: "#809CB1",
                    highlight: "rgba(220,220,220,1)",
                    label: "Pengembangan Usaha"
                },
                {
                    value: pengusahaan,
                    color: "#E0B16D",
                    highlight: "rgba(220,220,220,1)",
                    label: "Pengusahaan"
                },
                {
                    value: pembangkit,
                    color: "#272C2F",
                    highlight: "rgba(220,220,220,1)",
                    label: "Pembangkit"
                },
                {
                    value: t_dan_d, 
                    color: "#97242B",
                    highlight: "rgba(220,220,220,1)",
                    label: "Transmisi dan distribusi"
                },
                {
                    value: konstruksi, 
                    color: "#0D5BA5",
                    highlight: "rgba(220,220,220,1)",
                    label: "Konsturksi"
                },
                {
                    value: keuangan, 
                    color: "#B5B038",
                    highlight: "rgba(220,220,220,1)",
                    label: "Keuangan"
                },
                {
                    value: akuntansi,
                    color: "#D5D4DA",
                    highlight: "rgba(220,220,220,1)",
                    label: "Akuntansi"
                },
                {
                    value: sdm, 
                    color: "#FF95AB",
                    highlight: "rgba(220,220,220,1)",
                    label: "SDM"
                },
                {
                    value: umum, 
                    color: "#8D445F",
                    highlight: "rgba(220,220,220,1)",
                    label: "Umum"
                },
                {
                    value: hukum,
                    color: "#01894B",
                    highlight: "rgba(220,220,220,1)",
                    label: "Hukum"
                },
                {
                    value: humas, 
                    color: "#E21D24",
                    highlight: "rgba(220,220,220,1)",
                    label: "Humas"
                },
                {
                    value: pengadaan,
                    color: "#FFFFFF",
                    highlight: "rgba(220,220,220,1)",
                    label: "Pengadaan"
                },
                {
                    value: audit_internal, 
                    color: "#6B1508",
                    highlight: "rgba(220,220,220,1)",
                    label: "Audit Internal"
                },
                {
                    value: mmr,
                    color: "#34D7E9",
                    highlight: "rgba(220,220,220,1)",
                    label: "Manajemen Mutu dan Risiko"
                },
                {
                    value: pengawas_internal,
                    color: "#24D7E9",
                    highlight: "rgba(220,220,220,1)",
                    label: "Pengawas Internal"
                },                                       
                {
                    value: informasi_teknologi,
                    color: "#45637B",
                    highlight: "rgba(220,220,220,1)",
                    label: "Informasi Teknologi"
                }

            ];

      

             window.onload = function(){               

                var ctx2 = $(".pie-chart")[0].getContext("2d");
                window.myPie = new Chart(ctx2).Pie(doughnutData, {
                    responsive : true,
                    showTooltips: true
                });               

                var ctx = $(".doughnut-chart")[0].getContext("2d");
                window.myDoughnut = new Chart(ctx).Doughnut(doughnutData2, {
                    responsive : true,
                    showTooltips: true
                }); 

                var ctx3 = $(".pie-chart2")[0].getContext("2d");
                window.myPie2 = new Chart(ctx3).Pie(doughnutData3, {
                    responsive : true,
                    showTooltips: true
                });

                
            };
        })(jQuery);
     </script>
	<!-- end: Javascript -->
</body>
</html>