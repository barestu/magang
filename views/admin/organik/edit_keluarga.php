<!-- isi data pegawai-->
<div id="content">
   <div class="panel box-shadow-none content-header">
	  <div class="panel-body">
		<div class="col-md-12">
			<h3 class="animated fadeInLeft">Input Data Keluarga Pegawai</h3>
			<p class="animated fadeInDown">
			  Data Pegawai <span class="fa-angle-right fa"></span> Data Pegawai Organik <span class="fa-angle-right fa"></span> Data Keluarga Pegawai
			</p>
		</div>
	  </div>
	</div>
	<form class="form-element" method="post" action="<?php echo base_url()?>admin/data_keluarga/proc_edit_keluarga?id=<?php echo $dk['id_kel']?>" autocomplete="off" >
	
	  <div class="col-md-11 padding-2">
		<div class="col-md-20">
		  <div class="panel form-element-padding">
			<div class="panel-heading">
			 <h4>Form Pengisian</h4>
			</div>
			<div class="panel-body" style="padding-bottom:30px;">
			<div class="col-md-10">
			  <div class="col-sm-2"><input type="hidden" name="id_peg" maxlength="20" value="<?php echo $dk['id_peg']?>" class="form-control" readonly="readonly"></div>
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Nama</label>
				<div class="col-sm-6"><input type="text" name="nama_kel" maxlength="48" value="<?php echo $dk['nama_kel']?>" class="form-control" required></div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Hubungan Keluarga</label>
				<div class="col-sm-4">
				  <select name="hub_kel" class="form-control" required>
					<option value="<?php echo $dk['hub_kel']?>"><?php echo $dk['hub_kel']?></option>
					<option value="Suami">Suami</option>
					<option value="Istri">Istri</option>
					<option value="Anak">Anak</option>
				  </select>
				</div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Jenis Kelamin</label>
				<div class="col-sm-4">
				  <select name="jk_kel" class="form-control" required>
					<option value="<?php echo $dk['jk_kel']?>"><?php echo $dk['jk_kel']?></option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				  </select>
				</div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Tanggal Lahir</label>
				<div class="col-sm-4"><input type="date" name="tgl_kel" maxlength="20" value="<?php echo $dk['tgl_kel']?>" class="form-control" required ></div>                            
			  </div>  
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Keterangan</label>
				<div class="col-sm-4">
				  <select name="ket_kel" class="form-control" required>
					<option value="<?php echo $dk['ket_kel']?>"><?php echo $dk['ket_kel']?></option>
					<option value="Ditanggung">Ditanggung</option>
					<option value="Tidak Ditanggung">Tidak Ditanggung</option>
				  </select>
				</div>
			  </div>
			
			<div class="form-group">
				  <div class="col-sm-8">
					<div class="col-sm-5 right">
					  <input type="reset" class="btn-flip btn btn-round btn-default" value="Hapus Data">
					  </div>
					  <div class="col-sm-5 right">
					  <button class="btn-flip btn btn-round btn-default">
						<div class="flip">
						  <div class="side">
							Simpan Data
						  </div>
						  <div class="side back">
							<input type="submit" class="btn-round btn-default" value="Yakin?">
						  </div>
						</div>
						<span class="icon"></span>
					  </button>  
					  </div>
					  </div>                           
				  </div>        
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		</div>
		
		</form>

	</div>


<!-- end isi data pegawai -->