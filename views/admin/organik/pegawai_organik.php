<!--start: Content  -->
<div id="content">

	<div class="panel box-shadow-none content-header">
	  <div class="panel-body">
		<div class="col-md-12">
		  <h3 class="animated fadeInLeft">
			<span class="icon-people"></span> Data Pegawai Organik 
		  </h3>
		  <p class="animated fadeInDown">
			Data Pegawai <span class="fa-angle-right fa"></span> Data Pegawai Organik 
		  </p>
		</div>
	  </div>
	</div>
	
	<div class="col-md-12">
		<div class="panel">
		<div class="panel-body">
			
			<div class="btn-wrapper">
			  <button type="button" class="btn btn-danger" onclick="location.href='<?php echo base_url()?>admin/pegawai_organik/input'"> 
				<span class="fa icon-plus"></span> Tambah Data Pegawai 
			  </button> </br>
			</div>
			
			<div class="responsive-table">
			  <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
				  <thead>
					<tr>
					  <th>No.</th>
					  <th>NIP</th>
					  <th>Nama</th>
					  <th>Jabatan</th>
					  <th>Bidang</th>
					  <th>Direktorat</th>
					  <th>Aksi</th>
					</tr>
				  </thead>
				  <?php
				  $no=1;
				  foreach($data_organik as $row) {
				  ?>
				  <tr>
					<td class='mid'><?php echo $no ?></td>
					<td class='mid'><?php echo $row['nip'] ?></td>
					<td class='mid'><?php echo $row['nama'] ?></td>
					<td class='mid'><?php echo $row['nama_jab'] ?></td>
					<td class='mid'><?php echo $row['nama_bid'] ?></td>
					<td class='mid'><?php echo $row['nama_direktorat'] ?></td>
					<td>
					  <div class='btn-group' role='group'>
						<button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
						  <span class='fa fa-pencil-square-o'></span> Aksi
						  <span class='fa fa-angle-down'></span>
						</button>
						<ul class='dropdown-menu'>
						  <li><a href='<?php echo base_url()?>admin/data_pegawai_organik?id=<?php echo $row['id_peg']?>'>Detail</a></li>
						  <li><a href='<?php echo base_url()?>admin/pegawai_organik/edit?id=<?php echo $row['id_peg']?>'>Edit</a></li>
						  <li><a href='<?php echo base_url()?>admin/pegawai_organik/proc_delete?id=<?php echo $row['id_peg']?>' onClick="return confirm('Are you sure?');">Delete</a></li>
						</ul>
					  </div>
					</td>
				  </tr>
				  <?php
				  $no++;
				  }
				  ?>
			  </table>
			</div>
		</div>
		</div>	
	</div>
</div>
<!--end: Content  -->