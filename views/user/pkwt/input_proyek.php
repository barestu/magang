<!-- isi data pegawai-->
<div id="content">
   <div class="panel box-shadow-none content-header">
	  <div class="panel-body">
		<div class="col-md-12">
			<h3 class="animated fadeInLeft">Input Data Proyek Pegawai</h3>
			<p class="animated fadeInDown">
			  Data Pegawai <span class="fa-angle-right fa"></span> Data Pegawai PKWT <span class="fa-angle-right fa"></span> Data Proyek Pegawai
			</p>
		</div>
	  </div>
	</div>
	<form class="form-element" method="post" action="<?php echo base_url()?>admin/data_proyek/proc_input_proyek" autocomplete="off" >
	
	  <div class="col-md-11 padding-2">
		<div class="col-md-20">
		  <div class="panel form-element-padding">
			<div class="panel-heading">
			 <h4>Form Pengisian</h4>
			</div>
			<div class="panel-body" style="padding-bottom:30px;">
			<div class="col-md-10">
			  <div class="col-sm-2"><input type="hidden" name="id_peg" maxlength="20" value="<?php echo $id_peg ?>" class="form-control" readonly="readonly"></div>
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Nama Proyek</label>
				<div class="col-sm-10"><textarea name="nama_proyek" cols="20" rows="2" class="form-control" required></textarea></div>
			  </div></br></br>
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Tahun Mulai</label>
				<div class="col-sm-2 padding-20">
				  <select class="form-control" name="mulai_proyek" id="yearpicker" required></select>
				</div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Tahun Berakhir</label>
				<div class="col-sm-2 padding-20">
				  <select class="form-control" name="berakhir_proyek" id="yearpicker2" required></select>
				</div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Alamat Lokasi Proyek</label>
				<div class="col-sm-10"><textarea name="lokasi_proyek" cols="20" rows="2" class="form-control" required></textarea></div>
			  </div></br></br>
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Nama Lokasi Proyek</label>
				<div class="col-sm-5"><input type="text" name="nama_lokasi_proyek" maxlength="50" class="form-control" required></div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Pemilik Proyek</label>
				<div class="col-sm-5"><input type="text" name="pemilik_proyek" maxlength="50" class="form-control" required></div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label text-right">Jabatan Proyek</label>
				<div class="col-sm-5"><input type="text" name="jabatan_proyek" maxlength="50" class="form-control" required></div>
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

<!-- buat list tahun -->
<script>
  var start = 1970;
  var end = new Date().getFullYear();
  var options = "";
  for (i=1; i<=1; i++) {
  options += "<option></option>";		
	for(var year = start ; year <= end; year++){
		options += "<option>"+ year +"</option>";
	}
  }
  document.getElementById("yearpicker").innerHTML = options;
  
  var start = 1970;
  var end = new Date().getFullYear();
  var options = "";
  for (i=1; i<=1; i++) {
  options += "<option></option>";		
	for(var year = start ; year <= end; year++){
		options += "<option>"+ year +"</option>";
	}
  }
  document.getElementById("yearpicker2").innerHTML = options;
</script>
