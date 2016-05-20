<!--start: Content  -->
<div id="content">	
	<div class="panel box-shadow-none content-header">
	  <div class="panel-body">
		<div class="col-md-12">
		  <h3 class="animated fadeInLeft">
			<span class="icon-people"></span> Data Pegawai PKWT
		  </h3>
		  <p class="animated fadeInDown">
			Data Pegawai <span class="fa-angle-right fa"></span> View Data Pegawai PKWT
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
			  <a href="#tabs-demo4-area2" role="tab" id="tabs-demo4-2" data-toggle="tab" aria-expanded="false">Diklat & Sertifikasi</a>
			</li>
			<li role="presentation" class="">
			  <a href="#tabs-demo4-area3" role="tab" id="tabs-demo4-3" data-toggle="tab" aria-expanded="false">Data Keluarga</a>
			</li>
			<li role="presentation" class="">
			  <a href="#tabs-demo4-area4" role="tab" id="tabs-demo4-4" data-toggle="tab" aria-expanded="false">Riwayat Proyek</a>
			</li>
		</ul>
			<div id="tabsDemo4Content" class="tab-content tab-content-v3">
			
			  <!--Tab Data Pegawai-->
			  <div role="tabpanel" class="profile-v1 tab-pane fade active in" id="tabs-demo4-area1" aria-labelledby="tabs-demo4-area1"></br>
				<div class="col-md-12 col-sm-12 profile-v1-wrapper">
					<div class="col-md-9  profile-v1-cover-wrap" style="padding-right:0px;">
						<div class="profile-v1-pp">
						  <img src="<?php echo base_url()?>asset/img/avatar.jpg"/>
						  <h2><?php echo $data_peg['nama'];?></h2>
						  <button type="button" class="btn btn-info" onclick="location.href='#'">
							<span class="fa fa-camera"></span> Ganti Foto Profil
						  </button></br></br>
						  <button type="button" class="btn btn-success" onclick="location.href='<?php echo base_url()?>admin/cv_pkwt/index?id=<?php echo $data_peg['id_peg'];?>'">
							<span class="fa fa-edit"></span> Curriculum Vitae
						  </button>
						  <button type="button" class="btn btn-primary" onclick="location.href='<?php echo base_url()?>admin/pegawai_pkwt/edit?id=<?php echo $data_peg['id_peg'];?>'">
							<span class="fa fa-edit"></span> Edit Data Pegawai
						  </button>
						</div>
						<div class="col-md-12 profile-v1-cover">
						  <img src="<?php echo base_url()?>asset/img/bg1.jpg" class="img-responsive">
						</div>
					</div>
					<div class="col-md-3 col-sm-12 padding-0 profile-v1-right">
						<div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
						  <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">
							  <h2>Kontrak</h2>
							  <p>PKWT</p>
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
					<div class="form-group"><label class="col-sm-2 control-label">No. NPWP</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['no_npwp'];?></p></div>
					</div></br></br>
					<div class="form-group"><label class="col-sm-2 control-label">No. Kontrak</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['no_kontrak'];?></p></div>
					</div></br></br>
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
					<div class="form-group"><label class="col-sm-2 control-label">Mulai Kontrak</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['mulai_kontrak'];?></p></div>
					</div></br></br>	
					<div class="form-group"><label class="col-sm-2 control-label">Berakhir Kontrak</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['berakhir_kontrak'];?></p></div>
					</div></br></br>	
					<div class="form-group"><label class="col-sm-2 control-label">Uang Tugas</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['uang_tugas'];?></p></div>
					</div></br></br>	
					<div class="form-group"><label class="col-sm-2 control-label">Uang Insentif</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['uang_insentif'];?></p></div>
					</div></br></br>	
					<div class="form-group"><label class="col-sm-2 control-label">Uang Makan</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['uang_makan'];?></p></div>
					</div></br></br>	
					<div class="form-group"><label class="col-sm-2 control-label">Uang Transport</label>
					  <div class="col-sm-4"><p><?php echo $data_peg['uang_transport'];?></p></div>
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
				</div>
			  </div>
			  <!--End of Tab Data Pegawai-->
			  
			  <!--Tab Diklat & Sertifikasi-->
			  <div role="tabpanel" class="tab-pane fade" id="tabs-demo4-area2" aria-labelledby="tabs-demo4-area2">
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
								<li><a href='<?php echo base_url()?>admin/data_diklat/edit_diklat_pkwt?id=<?php echo $dd['id_dik']?>'>Edit</a></li>
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
				  
				  <button type="button" class="btn btn-info right" onclick="location.href='<?php echo base_url()?>admin/data_diklat/input_diklat_pkwt?id=<?php echo $data_peg['id_peg'];?>'">
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
								<li><a href='<?php echo base_url()?>admin/data_sertifikasi/edit_sertifikasi_pkwt?id=<?php echo $ds['id_ser']?>'>Edit</a></li>
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
				  
				  <button type="button" class="btn btn-info right" onclick="location.href='<?php echo base_url()?>admin/data_sertifikasi/input_sertifikasi_pkwt?id=<?php echo $data_peg['id_peg'];?>'">
					<span class="fa fa-edit"></span> Tambah Data
				  </button></br></br></br>
				  
				</div>
			  </div>
			  <!--End of Tab Diklat & Sertifikasi-->

			  <!--Tab Data Keluarga-->
				  <div role="tabpanel" class="tab-pane fade" id="tabs-demo4-area3" aria-labelledby="tabs-demo4-area3">
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
									<li><a href='<?php echo base_url()?>admin/data_keluarga/edit_keluarga_pkwt?id=<?php echo $dk['id_kel']?>'>Edit</a></li>
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
					  
					  <button type="button" class="btn btn-info right" onClick="location.href='<?php echo base_url()?>admin/data_keluarga/input_keluarga_pkwt?id=<?php echo $data_peg['id_peg'];?>'">
					    <span class="fa fa-edit"></span> Tambah Data
					  </button></br></br>
					</div>
                  </div>
			  <!--End of Tab Data Keluarga-->
			  
			  <!--Tab Riwayat Proyek-->
				  <div role="tabpanel" class="tab-pane fade" id="tabs-demo4-area4" aria-labelledby="tabs-demo4-area4">
                    <div>
					  <div class="form-group"><h4 class="col-sm-4 control-label">Riwayat Proyek</h4>
					  </div></br></br>
					  <div class="responsive-table">
						  <table class="table table-striped table-bordered" width="100%" cellspacing="0">
							<thead>
							  <tr>
								<th class="no">No.</th>
								<th>Nama Proyek</th>
								<th>Tahun Proyek</th>
								<th>Lokasi Proyek</th>
								<th>Jabatan</th>
								<th class="fix">Aksi</th> 
							  </tr>
							</thead>
							<?php 
							$no=1;
							foreach($data_proyek as $dpr) {
							?>
							<tr>
							 <td class='mid'><?php echo $no ?></td>
							 <td class='mid'><?php echo $dpr['nama_proyek'] ?></td>
							 <td class='mid'><?php echo $dpr['mulai_proyek'] ?> - <?php echo $dpr['berakhir_proyek'] ?></td>
							 <td class='mid'><?php echo $dpr['lokasi_proyek'] ?></td>
							 <td class='mid'><?php echo $dpr['jabatan_proyek'] ?></td>
							 <td> 
								<div class='btn-group' role='group'>
								  <button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
									<span class='fa fa-pencil-square-o'></span> Aksi
									<span class='fa fa-angle-down'></span>
								  </button>
								  <ul class='dropdown-menu'>
									<li><a href='<?php echo base_url()?>admin/data_proyek/edit_proyek?id=<?php echo $dpr['id_proyek']?>'>Edit</a></li>
									<li><a href='<?php echo base_url()?>admin/data_proyek/proc_delete_proyek?id=<?php echo $dpr['id_proyek']?>' onClick="return confirm('Are you sure?');">Delete</a></li>
								  </ul>
								</div>
							</tr>
							<?php
							$no++;
							}
							?>
						  </table>
					  </div>
					  
					  <button type="button" class="btn btn-info right" onClick="location.href='<?php echo base_url()?>admin/data_proyek/input_proyek?id=<?php echo $data_peg['id_peg'];?>'">
					    <span class="fa fa-edit"></span> Tambah Data
					  </button></br></br>
					</div>
                  </div>
			  <!--End of Tab Riwayat Proyek-->
			  
			</div>
		</div>
	  </div>	
	</div>
	
</div>
<!--end: Content  -->

