<!-- isi data pegawai-->
<div id="content">
	   <div class="panel box-shadow-none content-header">
		  <div class="panel-body">
			<div class="col-md-12">
				<h3 class="animated fadeInLeft">Data Talenta Pegawai Organik</h3>
				<p class="animated fadeInDown">
				  Data Pegawai <span class="fa-angle-right fa"></span> Isi Data Talenta Pegawai Organik 
				</p>
			</div>
		  </div>
		</div>
		<form class="form-element" method="post" action="<?php echo base_url()?>admin/data_talenta/proc_edit_talenta?id=<?php echo $dt['id_talenta']?>" autocomplete="off" >
		
		  <div class="col-md-11 padding-2">
			<div class="col-md-20">
			  <div class="panel form-element-padding">
				<div class="panel-heading">
				 <h4>Form Pengisian</h4>
				</div>
				 <div class="panel-body" style="padding-bottom:30px;">
				  <div class="col-md-10">
					<div class="col-sm-4"><input type="hidden" value="<?php echo $dt['id_peg']?>" name="id_peg" maxlength="20" class="form-control" readonly ></div>                         
					<div class="form-group"><label class="col-sm-2 control-label text-right">Mulai tanggal</label>
					  <div class="col-sm-4"><input type="date" name="mulai_tanggal" maxlength="20" value="<?php echo $dt['mulai_tanggal']?>" class="form-control" required ></div>
					</div>
					<div class="form-group"><label class="col-sm-2 control-label text-right">Berakhir Tanggal</label>
					  <div class="col-sm-4"><input type="date" name="berakhir_tanggal" maxlength="20" value="<?php echo $dt['berakhir_tanggal']?>" class="form-control" required ></div>
					</div>
					<div class="form-group"><label class="col-sm-2 control-label text-right">Semester</label>
					  <div class="col-sm-4"><input type="text" name="semester" pattern="[0-9]{1,}" title="Isi Hanya Angka" maxlength="20" value="<?php echo $dt['semester']?>" class="form-control" required ></div>
					</div>
					<div class="form-group"><label class="col-sm-2 control-label text-right">Grade</label>
						<div class="col-sm-4 padding-20">
						  <select name="id_grade" class="form-control" required>
							<option value="<?php echo $dt['id_grade']?>"><?php echo $dt['nama_grade']?></option>
							<?php
							foreach ($data_grade as $gr) { ?>
							<option value="<?php echo $gr->id_grade?>"><?php echo $gr->nama_grade?></option>
							<?php
							} ?>
						  </select>
						</div>
					</div>                            
					<div class="form-group"><label class="col-sm-2 control-label text-right">Poin</label>
					  <div class="col-sm-4"><input type="text" name="poin" maxlength="48" value="<?php echo $dt['poin']?>" class="form-control"></div>
					</div></br></br>

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