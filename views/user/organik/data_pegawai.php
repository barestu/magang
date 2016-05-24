<!--start: Content  -->
<div id="content">	
	<div class="panel box-shadow-none content-header">
	  <div class="panel-body">
		<div class="col-md-12">
		  <h3 class="animated fadeInLeft">
			<span class="icon-people"></span> Data Pegawai Organik 
		  </h3>
		  <p class="animated fadeInDown">
			Data Pegawai <span class="fa-angle-right fa"></span> View Data Pegawai Organik 
		  </p>
		</div>
	  </div>
	</div>
	
	<div class="col-md-12">
	  <div class="panel">
		<div class="panel-body">
		<ul id="tabs-demo4" class="nav nav-tabs nav-tabs-v3" role="tablist">
			<li role="presentation" class="active">
			  <a href="#tabs-demo4-area1" role="tab" id="tabs-demo4-1" data-toggle="tab" aria-expanded="true">Data Pegawai</a>
			</li>
			<li role="presentation" class="">
			  <a href="#tabs-demo4-area2" role="tab" id="tabs-demo4-2" data-toggle="tab" aria-expanded="false">Data Pendidikan</a>
			</li>
			<li role="presentation" class="">
			  <a href="#tabs-demo4-area3" role="tab" id="tabs-demo4-3" data-toggle="tab" aria-expanded="false">Diklat & Sertifikasi</a>
			</li>
			<li role="presentation" class="">
			  <a href="#tabs-demo4-area4" role="tab" id="tabs-demo4-4" data-toggle="tab" aria-expanded="false">Mutasi/Riwayat Profesi</a>
			</li>
			<li role="presentation" class="">
			  <a href="#tabs-demo4-area5" role="tab" id="tabs-demo4-5" data-toggle="tab" aria-expanded="false">Talenta</a>
			</li>
			<li role="presentation" class="">
			  <a href="#tabs-demo4-area6" role="tab" id="tabs-demo4-6" data-toggle="tab" aria-expanded="false">Data Keluarga</a>
			</li>
		</ul>
			<div id="tabsDemo4Content" class="tab-content tab-content-v3">
			
			  <!--Tab Data Pegawai-->
			  <div role="tabpanel" class="profile-v1 tab-pane fade active in" id="tabs-demo4-area1" aria-labelledby="tabs-demo4-area1"></br>
				<div class="col-md-12 col-sm-12 profile-v1-wrapper">
					<div class="col-md-9  profile-v1-cover-wrap" style="padding-right:0px;">
						<div class="profile-v1-pp">

						  <img src="<?php echo base_url()?>gallery/<?php echo $nama_gambar['nama_gambar'];?>"/>
						  <h2><?php echo $data_peg['nama'];?></h2>

						  
						  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#mygambar">
							<span class="fa fa-camera"></span> Ganti Foto Profil
						  </button></br></br>
							
						  <!--<button type="button" class="btn btn-info" onclick="location.href='#'">
							<span class="fa fa-camera"></span> Ganti Foto Profil
						  </button></br></br>-->
						  <button type="button" class="btn btn-primary" style="margin-top:5px;" onclick="location.href='<?php echo base_url()?>admin/cv_organik/index?id=<?php echo $data_peg['id_peg'];?>'">
							<span class="fa fa-edit"></span> Curriculum Vitae
						  </button>
						</div>
						<div class="col-md-12 profile-v1-cover">
						  <img src="<?php echo base_url()?>asset/img/bg1.jpg" class="img-responsive">
						</div>
					</div>
					<div class="col-md-3 col-sm-12 padding-0 profile-v1-right">
						<div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
						  <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">
							  <h1>51K</h1>
							  <p>Followers</p>
						  </div>
						</div>
						<div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
							<div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right2">
							   <h1>609</h1>
							   <p>Following</p>
							</div>
						</div>
						<div class="col-md-12 col-sm-4 profile-v1-right-wrap padding-0">
							<div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right3">
							  <h1>82001</h1>
							  <p>Post</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="form-group"><label class="col-sm-2 control-label">NIP</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['nip'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Nama</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['nama'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Jabatan</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['nama_jab'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Bidang</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['nama_bid'];?></p></div>
					</div></br></br>		
					<div class="form-group"><label class="col-sm-2 control-label">Direktorat</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['nama_direktorat'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Tanggal Masuk</label>
					  <div class="col-sm-4"><p><?php echo date('d-m-Y',strtotime($data_peg['tgl_masuk']));?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Tanggal Angkat</label>
					  <div class="col-sm-4"><p><?php echo date('d-m-Y',strtotime($data_peg['tgl_angkat']));?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">No. SK Pensiun</label>
					  <div class="col-sm-4"><p> - </p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['tempat_lahir'].", ".date('d-m-Y',strtotime($data_peg['tgl_lahir']));?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Alamat</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['alamat'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Jenis Kelamin</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['jenis_kelamin'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Agama</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['agama'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">No. Telepon</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['no_telp'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Email 1</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['email'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Email 2</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['email2'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Status</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['status'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">Jumlah Keluarga</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['jml_keluarga'];?></p></div>
					</div></br></br>
					
					<button type="button" class="btn btn-success right" onclick="location.href='<?php echo base_url()?>admin/pegawai_organik/edit?id=<?php echo $data_peg['id_peg'];?>'">
					  <span class="fa fa-edit"></span> Edit Data Pegawai
					</button>
				</div>
			  </div>
			  <!--End of Tab Data Pegawai-->
			  
			  <!--Tab Data Pendidikan-->
			  <div role="tabpanel" class="tab-pane fade" id="tabs-demo4-area2" aria-labelledby="tabs-demo4-area2">
				<div>
				  <div class="form-group"><h4 class="col-sm-4 control-label">Data Pendidikan</h4>
				  </div></br></br>
				  <div class="responsive-table">
					  <table class="table table-striped table-bordered" width="100%" cellspacing="0">
						<thead>
						  <tr>
							<th class="no">No.</th>
							<th>Tingkat/Jurusan</th>
							<th>Tahun Lulus</th>
							<th>Lembaga Pendidikan</th>
							<th>Gelar Akademik</th>
							<th class="fix">Aksi</th> 
						  </tr>
						</thead>
						<?php
						$no=1;
						foreach($data_pendidikan as $dp) {
						?>
						<tr>
						  <td class='mid'><?php echo $no?></td>
						  <td class='mid'><?php echo $dp['tingkat_pen']?></td>
						  <td class='mid'><?php echo $dp['tahun_pen']?></td>
						  <td class='mid'><?php echo $dp['lembaga_pen']?></td>
						  <td class='mid'><?php echo $dp['gelar_pen']?></td>
						  <td> 
							<div class='btn-group' role='group'>
							  <button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
								<span class='fa fa-pencil-square-o'></span> Aksi
								<span class='fa fa-angle-down'></span>
							  </button>
							  <ul class='dropdown-menu'>
								<li><a href='<?php echo base_url()?>admin/data_pendidikan/edit_pendidikan?id=<?php echo $dp['id_pen']?>'>Edit</a></li>
								<li><a href='<?php echo base_url()?>admin/data_pendidikan/proc_delete_pendidikan?id=<?php echo $dp['id_pen']?>' onClick="return confirm('Are you sure?');">Delete</a></li>
							  </ul>
							</div>
						</tr>
						<?php 
						$no++;
						}
						?>
					  </table>
				  </div>
				  
				  <button type="button" class="btn btn-info right" onclick="location.href='<?php echo base_url()?>admin/data_pendidikan/input_pendidikan?id=<?php echo $data_peg['id_peg'];?>'">
					<span class="fa fa-edit"></span> Tambah Data
				  </button></br></br>
				</div>
			  </div>
			  <!--End of Tab Data Pendidikan-->			  
			  
			  <!--Tab Diklat & Sertifikasi-->
			  <div role="tabpanel" class="tab-pane fade" id="tabs-demo4-area3" aria-labelledby="tabs-demo4-area3">
				<div>
				  <div class="form-group"><h4 class="col-sm-2 control-label">Diklat</h4>
				  </div></br></br>
				  <div class="responsive-table">
					  <table class="table table-striped table-bordered" width="100%" cellspacing="0">
						<thead>
						  <tr>
							<th class="no">No.</th>
							<th>Nama Diklat</th>
							<th class="fix">Jenis</th>
							<th>Tahun</th>
							<th class="fix">Aksi</th>
						  </tr>
						</thead>
						<?php 
						$no=1;
						foreach($data_diklat as $dd) {
						?>
						<tr>
						 <td class='mid'><?php echo $no ?></td>
						 <td class='mid'><?php echo $dd['nama_dik'] ?></td>
						 <td class='mid'><?php echo $dd['jenis_dik'] ?></td>
						 <td class='mid'><?php echo $dd['tahun_dik'] ?></td>
						 <td> 
							<div class='btn-group' role='group'>
							  <button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
								<span class='fa fa-pencil-square-o'></span> Aksi
								<span class='fa fa-angle-down'></span>
							  </button>
							  <ul class='dropdown-menu'>
								<li><a href='<?php echo base_url()?>admin/data_diklat/edit_diklat?id=<?php echo $dd['id_dik']?>'>Edit</a></li>
								<li><a href='<?php echo base_url()?>admin/data_diklat/proc_delete_diklat?id=<?php echo $dd['id_dik']?>' onClick="return confirm('Are you sure?');">Delete</a></li>
							  </ul>
							</div>
						</tr>
						<?php
						$no++;
						}
						?>
					  </table>
				  </div>
				  
				  <button type="button" class="btn btn-info right" onclick="location.href='<?php echo base_url()?>admin/data_diklat/input_diklat?id=<?php echo $data_peg['id_peg'];?>'">
					<span class="fa fa-edit"></span> Tambah Data
				  </button></br></br></br>
				
				  <div class="form-group"><h4 class="col-sm-2 control-label">Sertifikasi</h4>
				  </div></br></br>
				  <div class="responsive-table">
					  <table class="table table-striped table-bordered" width="100%" cellspacing="0">
						<thead>
						  <tr>
							<th class="no">No.</th>
							<th>Nama Sertifikasi</th>
							<th class="fix">Tanggal</th>
							<th class="fix">Aksi</th> 
						  </tr>
						</thead>
						<?php 
						$no=1;
						foreach($data_sertifikasi as $ds) {
						?>
						  <tr>
							 <td class='mid'><?php echo $no ?></td>
							 <td class='mid'><?php echo $ds['nama_ser'] ?></td>
							 <td class='mid'><?php echo date('d-m-Y',strtotime($ds['tanggal_ser'])) ?></td>
							 <td> 
								<div class='btn-group' role='group'>
								  <button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
									<span class='fa fa-pencil-square-o'></span> Aksi
									<span class='fa fa-angle-down'></span>
								  </button>
								  <ul class='dropdown-menu'>
								<li><a href='<?php echo base_url()?>admin/data_sertifikasi/edit_sertifikasi?id=<?php echo $ds['id_ser']?>'>Edit</a></li>
								<li><a href='<?php echo base_url()?>admin/data_sertifikasi/proc_delete_sertifikasi?id=<?php echo $ds['id_ser']?>' onClick="return confirm('Are you sure?');">Delete</a></li>
								  </ul>
								</div>
							 </tr>
						<?php
						$no++;
						}
						?>
					  </table>
				  </div>
				  
				  <button type="button" class="btn btn-info right" onclick="location.href='<?php echo base_url()?>admin/data_sertifikasi/input_sertifikasi?id=<?php echo $data_peg['id_peg'];?>'">
					<span class="fa fa-edit"></span> Tambah Data
				  </button></br></br>

				</div>
			  </div>
			  <!--End of Tab Diklat & Sertifikasi-->
			  
			  <!--Tab Mutasi-->
			  <div role="tabpanel" class="tab-pane fade" id="tabs-demo4-area4" aria-labelledby="tabs-demo4-area4">
				<div>
				  <div class="form-group"><h4 class="col-sm-4 control-label">Mutasi/Riwayat Profesi</h4>
				  </div></br></br>
				  <div class="responsive-table">
					  <table class="table table-striped table-bordered" width="100%" cellspacing="0">
						<thead>
						  <tr>
							<th class="no">No.</th>
							<th>Nama Profesi</th>
							<th class="fix">Sejak</th>
							<th class="fix">Hingga</th>
							<th class="fix">Aksi</th> 
						  </tr>
						</thead>
						<?php
						$no=1;
						foreach($data_mutasi as $dm) {
						?>
						  <tr>
							 <td class='mid'><?php echo $no ?></td>
							 <td class='mid'><?php echo $dm['nama_mut'] ?></td>
							 <td class='mid'><?php echo date('d-m-Y',strtotime($dm['tgl_sejak'])) ?></td>
							 <td class='mid'><?php echo date('d-m-Y',strtotime($dm['tgl_hingga'])) ?></td>
							 <td> 
								<div class='btn-group' role='group'>
								  <button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
									<span class='fa fa-pencil-square-o'></span> Aksi
									<span class='fa fa-angle-down'></span>
								  </button>
								  <ul class='dropdown-menu'>
									<li><a href='<?php echo base_url()?>admin/data_mutasi/edit_mutasi?id=<?php echo $dm['id_mut']?>'>Edit</a></li>
									<li><a href='<?php echo base_url()?>admin/data_mutasi/proc_delete_mutasi?id=<?php echo $dm['id_mut']?>' onClick="return confirm('Are you sure?');">Delete</a></li>
								  </ul>
								</div>
						  </tr>
						<?php
						$no++;
						}
						?>
					  </table>
				  </div>
				  
				  <button type="button" class="btn btn-info right" onclick="location.href='<?php echo base_url()?>admin/data_mutasi/input_mutasi?id=<?php echo $data_peg['id_peg'];?>'">
					<span class="fa fa-edit"></span> Tambah Data
				  </button></br></br>
				</div>
			  </div>
			  <!--End of Tab Mutasi-->
			  
			  <!--Tab Talenta-->
			  <div role="tabpanel" class="tab-pane fade" id="tabs-demo4-area5" aria-labelledby="tabs-demo4-area5">
				<div>
				<div class="form-group"><h4 class="col-sm-4 control-label">Talenta</h4>
				  </div></br></br>
				  <div class="responsive-table">
					  <table class="table table-striped table-bordered" width="100%" cellspacing="0">
						<thead>
						  <tr>
							<th class="no">No.</th>
							<th>Periode</th>
							<th class="no">Semester</th>
							<th>Grade</th>
							<th class="no">Poin</th>
							<th class="fix">Aksi</th> 
						  </tr>
						</thead>
						<?php 
						$no=1;
						foreach($data_talenta as $dt) {
						?>
					    <tr>
						  <td class='mid'><?php echo $no ?></td>
						  <td class='mid'><?php echo date('d F Y',strtotime($dt['mulai_tanggal']))?> - <?php echo date('d F Y',strtotime($dt['berakhir_tanggal'])) ?></td>
						  <td class='mid'><?php echo $dt['semester'] ?></td>
						  <td class='mid'><?php echo $dt['nama_grade'] ?></td>
						  <td class='mid'><?php echo $dt['poin'] ?></td>
						  <td> 
							<div class='btn-group' role='group'>
							  <button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
								<span class='fa fa-pencil-square-o'></span> Aksi
								<span class='fa fa-angle-down'></span>
							  </button>
							  <ul class='dropdown-menu'>
								<li><a href='<?php echo base_url()?>admin/data_talenta/edit_talenta?id=<?php echo $dt['id_talenta']?>'>Edit</a></li>
								<li><a href='<?php echo base_url()?>admin/data_talenta/proc_delete_talenta?id=<?php echo $dt['id_talenta']?>' onClick="return confirm('Are you sure?');">Delete</a></li>
							  </ul>
							</div>
						</tr>
						<?php
						$no++;
						}
						?>
					  </table>
				  </div>
				  
				  <button type="button" class="btn btn-info right" onclick="location.href='<?php echo base_url()?>admin/data_talenta/input_talenta?id=<?php echo $data_peg['id_peg'];?>'">
					<span class="fa fa-edit"></span> Tambah Data
				  </button></br></br>
				</div>
			  </div>
			  <!--End of Tab Talenta-->
			  
			  <!--Tab Data Keluarga-->
				  <div role="tabpanel" class="tab-pane fade" id="tabs-demo4-area6" aria-labelledby="tabs-demo4-area6">
                    <div>
					  <div class="form-group"><h4 class="col-sm-4 control-label">Data Keluarga</h4>
					  </div></br></br>
					  <div class="responsive-table">
						  <table class="table table-striped table-bordered" width="100%" cellspacing="0">
							<thead>
							  <tr>
								<th class="no">No.</th>
								<th>Nama</th>
								<th>Hubungan Keluarga</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Lahir</th>
								<th>Keterangan</th>
								<th class="fix">Aksi</th> 
							  </tr>
							</thead>
							<?php 
							$no=1;
							foreach($data_keluarga as $dk) {
							?>
							<tr>
							 <td class='mid'><?php echo $no ?></td>
							 <td class='mid'><?php echo $dk['nama_kel'] ?></td>
							 <td class='mid'><?php echo $dk['hub_kel'] ?></td>
							 <td class='mid'><?php echo $dk['jk_kel'] ?></td>
							 <td class='mid'><?php echo date('d-m-Y',strtotime($dk['tgl_kel'])); ?></td>
							 <td class='mid'><?php echo $dk['ket_kel'] ?></td>
							 <td> 
								<div class='btn-group' role='group'>
								  <button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
									<span class='fa fa-pencil-square-o'></span> Aksi
									<span class='fa fa-angle-down'></span>
								  </button>
								  <ul class='dropdown-menu'>
								<li><a href='<?php echo base_url()?>admin/data_keluarga/edit_keluarga?id=<?php echo $dk['id_kel']?>'>Edit</a></li>
								<li><a href='<?php echo base_url()?>admin/data_keluarga/proc_delete_keluarga?id=<?php echo $dk['id_kel']?>' onClick="return confirm('Are you sure?');">Delete</a></li>
								  </ul>
								</div>
							</tr>
							<?php
							$no++;
							}
							?>
						  </table>
					  </div>
					  
					  <button type="button" class="btn btn-info right" onclick="location.href='<?php echo base_url()?>admin/data_keluarga/input_keluarga?id=<?php echo $data_peg['id_peg'];?>'">
					    <span class="fa fa-edit"></span> Tambah Data
					  </button></br></br>
					</div>
                  </div>
			  <!--End of Tab Data Keluarga-->
			  

			  
			</div>
		</div>
	  </div>	
	</div>
	
</div>
<!--end: Content  -->