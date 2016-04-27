<div id ="content" class="kontent">
	
		<div class="panel box-shadow-none content-header">
          <div class="panel-body">
            <div class="col-md-12">
			  <h3 class="animated fadeInLeft">
				<span class ="fa fa-building-o"></span> Direktorat 
			  </h3>
              <p class="animated fadeInDown">
				Data Master <span class ="fa-angle-right fa"></span> Direktorat 
              </p>
            </div>
          </div>
        </div>
		
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-body">
				
				<div class="btn-wrapper">
				  	<button type="button" class="btn btn-danger" onclick="location.href='<?php echo base_url() ?>admin/Master_direktorat/form_input'"> 
						<span class="fa icon-plus"></span> Tambah Direktorat 
				  </button> </br>
				</div>
				
				<div class="responsive-table">
                  <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
						  <th>No.</th>                          
                          <th class="col-md-4">Nama Direktorat</th>						  
              <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php
					  $no=1;
					  foreach($direktorat->result_array() as $row) {
					  	?>												
						<tr>
							  <td class='mid'><?php echo $no ?></td>
						      <td class='mid'><?php echo $row['nama_direktorat'] ?></td>  
							  <td> 
								<div class='btn-group' role='group'>
								  <button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
								    <span class='fa fa-pencil-square-o'></span> Aksi
								    <span class='fa fa-angle-down'></span>
								  </button>
								  <ul class='dropdown-menu'>                 				
                  				<li><a href="<?php echo base_url(); ?>admin/Master_direktorat/form_delete/<?php echo $row['id_direktorat']; ?>">Delete</a></li>  
                  				</ul>
                				</div>
                				</td>
                		</tr><?php
           						 $no++;	
           						 }?>
				  </table>
				</div>
			</div>
		</div>	
	</div>
</div>
