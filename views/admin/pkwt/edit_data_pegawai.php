<!-- isi data pegawai-->
<div id="content">
   <div class="panel box-shadow-none content-header">
	  <div class="panel-body">
		<div class="col-md-12">
			<h3 class="animated fadeInLeft">Data Pegawai PKWT</h3>
			<p class="animated fadeInDown">
			  Data Pegawai <span class="fa-angle-right fa"></span> Isi Data Pegawai PKWT
			</p>
		</div>
	  </div>
	</div>
	<form class="form-element" method="post" action="<?php echo base_url()?>admin/pegawai_pkwt/proc_edit?id=<?php echo $row['id_peg']?>" autocomplete="off" >
	  <div class="col-md-11 padding-2">
		<div class="col-md-20">
		  <div class="panel form-element-padding">
			<div class="panel-heading">
			 <h4>Form Pengisian</h4>
			</div>
			 <div class="panel-body" style="padding-bottom:30px;">
			  <div class="col-md-10">
				<div class="col-sm-4"><input type="hidden" name="id_peg" maxlength="20" value="<?php echo $row['id_peg']?>" class="form-control" required readonly></div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">No. NPWP</label>
				  <div class="col-sm-4"><input type="text" name="no_npwp" maxlength="20" value="<?php echo $row['no_npwp']?>" class="form-control" required ></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">No. Kontrak</label>
				  <div class="col-sm-4"><input type="text" name="no_kontrak" maxlength="20" value="<?php echo $row['no_kontrak']?>" class="form-control" required ></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">NIP</label>
				  <div class="col-sm-4">
				    <select name="nip" class="form-control" required>
					  <option value="<?php echo $row['nip']?>"><?php echo $row['nip']?></option>
					  <option value="KONTRAK">KONTRAK</option>
					  <option value="OUTSOURCING">OUTSOURCING</option>
					  <option value="PENSIUN PLN">PENSIUN PLN</option>
					</select>
				  </div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Nama</label>
				  <div class="col-sm-6"><input type="text" name="nama" maxlength="48" value="<?php echo $row['nama']?>" class="form-control" required></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Bidang</label>
				  <div class="col-sm-4 padding-20">
					<select name="id_bid" class="form-control" required>
						<option value="<?php echo $row['id_bid']?>" ><?php echo $row['nama_bid']?></option>
						<?php
						foreach ($data_bidang as $bid) { ?>
						<option value="<?php echo $bid->id_bid?>"><?php echo $bid->nama_bid?></option>;
						<?php
						} ?>
					</select>
				  </div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Jabatan</label>
				  <div class="col-sm-4 padding-20">
					<select name="id_jab" class="form-control" required>
						<option value="<?php echo $row['id_jab']?>"><?php echo $row['nama_jab']?></option>
						<?php
						foreach ($data_jabatan as $jab) { ?>
						<option value="<?php echo $jab->id_jab?>"><?php echo $jab->nama_jab?></option>;
						<?php
						} ?>
					</select>
				  </div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Direktorat</label>
				  <div class="col-sm-4 padding-20">
					<select name="id_direktorat" class="form-control" required>
						<option value="<?php echo $row['id_direktorat']?>"><?php echo $row['nama_direktorat']?></option>
						<?php
						foreach ($data_direktorat as $dir) { ?>
						<option value="<?php echo $dir->id_direktorat?>"><?php echo $dir->nama_direktorat?></option>;
						<?php
						} ?>
					</select>
				  </div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Mulai Kontrak</label>
				  <div class="col-sm-4"><input type="date" name="mulai_kontrak" maxlength="20" value="<?php echo $row['mulai_kontrak']?>" class="form-control" required ></div>                            
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Berakhir Kontrak</label>
				  <div class="col-sm-4"><input type="date" name="berakhir_kontrak" maxlength="20" value="<?php echo $row['berakhir_kontrak']?>" class="form-control" required ></div>
				</div></br>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Uang Tugas</label>
				  <div class="col-sm-4"><input type="text" name="uang_tugas" maxlength="20" value="<?php echo $row['uang_tugas']?>" class="form-control" required ></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Uang Insentif</label>
				  <div class="col-sm-4">
				  <input type="text" name="uang_insentif" maxlength="20" value="<?php echo $row['uang_insentif']?>" class="form-control" required ></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Uang Makan</label>
				  <div class="col-sm-4"><input type="text" name="uang_makan" maxlength="20" value="<?php echo $row['uang_makan']?>" class="form-control" required ></div>
				</div> 
				<div class="form-group"><label class="col-sm-2 control-label text-right">Uang Transport</label>
				  <div class="col-sm-4"><input type="text" name="uang_transport" maxlength="20" value="<?php echo $row['uang_transport']?>" class="form-control" required ></div>
				</div>                            
				<div class="form-group"><label class="col-sm-2 control-label text-right">Alamat</label>
				  <div class="col-sm-10"><textarea name="alamat" cols="40" rows="3" class="form-control" required><?php echo $row['alamat']?></textarea></div>
				</div>
				<br><br>
				<div class="form-group"><label class="col-sm-2 control-label text-right">No.Telephone</label>
				  <div class="col-sm-4"><input type="text" name="no_telp" maxlength="20" value="<?php echo $row['no_telp']?>" class="form-control" required></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Email 1</label>
				  <div class="col-sm-4"><input type="email" name="email" maxlength="50" placeholder="..@pln-enjiniring.com" value="<?php echo $row['email']?>" class="form-control"></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Email 2</label>
				  <div class="col-sm-4"><input type="email" name="email2" maxlength="50" placeholder="..@example.com" value="<?php echo $row['email2']?>" class="form-control"></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Tempat Lahir</label>
				  <div class="col-sm-4"><input type="text" name="tempat_lahir" maxlength="20" value="<?php echo $row['tempat_lahir']?>" class="form-control" required></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Tanggal Lahir</label>
				  <div class="col-sm-4"><input type="date" name="tgl_lahir" maxlength="20" value="<?php echo $row['tgl_lahir']?>" class="form-control" required></div>
				  </div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Jenis Kelamin</label>
					<div class="col-sm-3 padding-20">
					  <select name="jenis_kelamin" class="form-control" required>
						<option value="<?php echo $row['jenis_kelamin']?>"><?php echo $row['jenis_kelamin']?></option>
						<option value="Laki-Laki">Laki-Laki</option>
						<option Value="Perempuan">Perempuan</option>
					  </select>
					</div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Agama</label>
					<div class="col-sm-3 padding-20">
					  <select name="agama" class="form-control" required>
						<option value="<?php echo $row['agama']?>"><?php echo $row['agama']?></option>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen Protestant</option>
						<option value="Katholik">Katholik</option>
						<option Value="Hindu">Hindu</option>
						<option Value="Budha">Budha</option>
						<option Value="Lainnya">Lainnya</option>
					  </select>
					</div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Status</label>
					<div class="col-sm-3 padding-20">
					  <select name="status" class="form-control" required>
						<option value="<?php echo $row['status']?>"><?php echo $row['status']?></option>
						<option value="Belum Menikah">Belum Menikah</option>
						<option Value="Menikah">Menikah</option>
					  </select>
					</div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label text-right">Jumlah Keluarga</label>
				  <div class="col-sm-2"><input type="text" name="jml_keluarga" maxlength="2" value="<?php echo $row['jml_keluarga']?>" class="form-control"></div>
				</div>                                         
				<br><br>

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
	
<!-- currency pattern display script -->
<script>
document.getElementById("uang").onblur =function () {    
    this.value = parseFloat(this.value.replace(/,/g, ""))
                    .toFixed(2)
                    .toString()
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
</script>