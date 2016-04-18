<!-- start: Javascript -->
    <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/jquery.ui.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
   
    <!-- plugins -->
    <script src="<?php echo base_url(); ?>asset/js/plugins/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/plugins/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/plugins/jquery.nicescroll.js"></script>
	
	<!-- buat logout -->
	<div id="content">
        <div class="modal fade modal-v2" id="myModal" role="dialog">
          <div class="modal-dialog">
    
		<!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Peringatan</h4>
              </div>
              <div class="modal-body">
                <h4 align="center">Keluar Akun?</h4>
              </div>
              <div class="modal-footer">
                <a href="<?php echo base_url(); ?>admin/dashboard/logout" class="btn btn-danger" role="button">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>          
             </div>
            </div>
          </div>
        </div>
	</div>
	
    <!-- custom -->
     <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
     <script type="text/javascript">
	 
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
	<!-- end: Javascript -->
</body>
</html>