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
      $sisa_pkwt = $pkwt - $notifikasi;
      echo "var jml_kontrak={$notifikasi}
       var jml_pkwt={$pkwt}
       var jml_organik={$organik}
       var sisa_pkwt={$sisa_pkwt}";
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
            };
        })(jQuery);
     </script>
	<!-- end: Javascript -->
</body>
</html>