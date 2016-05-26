<!-- isi data pegawai-->
	<div>
	   </br></br>
	   <div class="panel box-shadow-none content-header">
		  <div class="panel-body">
			<div class="col-md-20">
				<h3 class="animated fadeInLeft">CURRICULUM VITAE PKWT</h3>
				<p class="animated fadeInDown">
				  Data Pegawai <span class="fa-angle-right fa"></span> Isi Data CV PKWT
				</p>
			</div>
		  </div>
		</div>
		
		<form class="form-element-padding" method="post" action="<?php echo base_url()?>admin/cv_pkwt/proc_input" autocomplete="off" >
		  <div class="col-md-20 padding-2">
			<div class="col-md-20">
			  <div class="panel form-element-padding">
				<div class="panel-heading">
				 <h4>Form Pengisian</h4>
				</div>
				<div class="panel-body" style="padding-bottom:30px;">
				  <div class="col-md-12 form-group">
				    <input type="hidden" name="id_peg" maxlength="20" value="<?php echo $data_peg['id_peg']?>" class="form-control" required readonly>
					</br>
					
					<div class="col-md-7"><label><b><i>Proposed Position : </i></b></label>
				      <input type="text" name="nama_jab" maxlength="50" value="<?php echo $data_peg['nama_jab']?>" class="form-control" required readonly>
					</div></br></br></br></br>
					<div class="col-md-7"><label><b><i>Name of Firm : </i></b></label>
				      <input type="text" name="nama_perusahaan" maxlength="50" value="" class="form-control" required>
					</div></br></br></br></br>
					<div class="col-md-7"><label><b><i>Name of Personel : </i></b></label>
				      <input type="text" name="nama" maxlength="50" value="<?php echo $data_peg['nama']?>" class="form-control" required readonly>
					</div></br></br></br></br>
					<div class="col-md-7"><label><b><i>Date of Birth : </i></b></label>
				      <input type="text" name="tgl_lahir" maxlength="20" value="<?php echo $data_peg['tgl_lahir']?>" class="form-control" required readonly>
					</div></br></br></br></br>
					<div class="col-md-7"><label><b><i>Nationality : </i></b></label>
				      <input type="text" name="warga_negara" maxlength="20" value="" class="form-control" required>
					</div></br></br></br></br>
					<div class="col-md-7"><label><b><i>Education : </i></b></label>
				      <input type="text" name="pendidikan" maxlength="50" value="" class="form-control" required>
					</div></br></br></br></br>
					
					<!-- MEMBERSHIP -->
					<div class="col-md-9"><label><b><i>Membership of Professional Association : </i></b></label></br>
				      <div class="col-md-7"><input type="text" name="menmber_asosiasi1" maxlength="100" value="" class="form-control" required></div>
					  <div class="col-sm-2 ">
						<select class="form-control" name="tahun_member1" id="yearpicker1" required></select>
					  </div></br></br></br>
				      <div class="col-md-7"><input type="text" name="menmber_asosiasi2" maxlength="100" value="" class="form-control" required></div>
					  <div class="col-sm-2 padding-20">
						<select class="form-control" name="tahun_member2" id="yearpicker2" required></select>
					  </div></br></br></br>
				      <div class="col-md-7"><input type="text" name="menmber_asosiasi3" maxlength="100" value="" class="form-control" required></div>
					  <div class="col-sm-2 padding-20">
						<select class="form-control" name="tahun_member" id="yearpicker3" required></select>
					  </div></br></br></br>
					</div>
					
					<!-- DIKLAT TRAINING -->
					<div class="col-md-9"><label><b><i>Proficiency Training : </i></b></label></br>
					<?php
					  foreach($data_diklat as $dd) {
					?>
				      <div class="col-md-7"><input type="text" name="name" maxlength="100" value="<?php echo $dd['nama_dik']?>" class="form-control" required></div>					  
					  <div class="col-sm-1 "><i>Year</i></div>
					  <div class="col-sm-2 "><input type="text" name="name" maxlength="100" value="<?php echo $dd['tahun_dik']?>" class="form-control" required></div>
					  </br></br></br>
					<?php
					  }
					?>
					</div>
					
					<div class="col-md-9"><label><b><i>Countries of Work Experience : </i></b></label></br>
				      <div class="col-sm-4"><input type="text" name="negara_bekerja" maxlength="20" value="" class="form-control" required></div></br></br></br>
					</div>
					
					<!-- LANGUAGES -->
					<div class="col-md-10"><label><b><i>Languages : </i></b></label></br>
				      <div class="col-md-2"><input type="text" name="bahasa1" maxlength="30" value="" class="form-control" required></div>					  
					  <div class="col-sm-1 "><i>Speaking</i></div>
					  <div class="col-sm-2 ">
						<select class="form-control" name="speaking1" >
						    <option></option>
							<option value="Bad">Bad</option>
							<option Value="Good">Good</option>
							<option Value="Very Good">Very Good</option>
							<option Value="Native">Native</option>
						  </select>
					  </div>
					  <div class="col-sm-1 "><i>Reading</i></div>
					  <div class="col-sm-2 ">
						<select class="form-control" name="reading1" >
						    <option></option>
							<option value="Bad">Bad</option>
							<option Value="Good">Good</option>
							<option Value="Very Good">Very Good</option>
							<option Value="Native">Native</option>
						  </select>
					  </div>
					  <div class="col-sm-1 "><i>Writing</i></div>
					  <div class="col-sm-2 ">
						<select class="form-control" name="writing1" >
						    <option></option>
							<option value="Bad">Bad</option>
							<option Value="Good">Good</option>
							<option Value="Very Good">Very Good</option>
							<option Value="Native">Native</option>
						  </select>
					  </div></br></br></br>

				      <div class="col-md-2"><input type="text" name="bahasa2" maxlength="30" value="" class="form-control" ></div>					  
					  <div class="col-sm-1 "><i>Speaking</i></div>
					  <div class="col-sm-2 ">
						<select class="form-control" name="speaking2" >
						    <option></option>
							<option value="Bad">Bad</option>
							<option Value="Good">Good</option>
							<option Value="Very Good">Very Good</option>
							<option Value="Native">Native</option>
						  </select>
						</select>
					  </div>
					  <div class="col-sm-1 "><i>Reading</i></div>
					  <div class="col-sm-2 ">
						<select class="form-control" name="reading2" >
						    <option></option>
							<option value="Bad">Bad</option>
							<option Value="Good">Good</option>
							<option Value="Very Good">Very Good</option>
							<option Value="Native">Native</option>
						  </select>
					  </div>
					  <div class="col-sm-1 "><i>Writing</i></div>
					  <div class="col-sm-2 ">
						<select class="form-control" name="writing2" >
						    <option></option>
							<option value="Bad">Bad</option>
							<option Value="Good">Good</option>
							<option Value="Very Good">Very Good</option>
							<option Value="Native">Native</option>
						  </select>
					  </div></br></br></br>

				      <div class="col-md-2"><input type="text" name="bahasa3" maxlength="30" value="" class="form-control" ></div>					  
					  <div class="col-sm-1 "><i>Speaking</i></div>
					  <div class="col-sm-2 ">
						<select class="form-control" name="speaking3" >
						    <option></option>
							<option value="Bad">Bad</option>
							<option Value="Good">Good</option>
							<option Value="Very Good">Very Good</option>
							<option Value="Native">Native</option>
						  </select>
					  </div>
					  <div class="col-sm-1 "><i>Reading</i></div>
					  <div class="col-sm-2 ">
						<select class="form-control" name="reading3" >
						    <option></option>
							<option value="Bad">Bad</option>
							<option Value="Good">Good</option>
							<option Value="Very Good">Very Good</option>
							<option Value="Native">Native</option>
						  </select>
					  </div>
					  <div class="col-sm-1 "><i>Writing</i></div>
					  <div class="col-sm-2 ">
						<select class="form-control" name="writing3" >
						    <option></option>
							<option value="Bad">Bad</option>
							<option Value="Good">Good</option>
							<option Value="Very Good">Very Good</option>
							<option Value="Native">Native</option>
						  </select>
					  </div></br></br></br>
					</div>

					<!-- RIWAYAT PROFESI -->
					<div class="col-md-9"><label><b><i>Employment Record : </i></b></label></br>
					  <div class="col-sm-2 "><i>From</i></div>
				      <div class="col-sm-2"><input type="text" name="nama" maxlength="100" value="" class="form-control" required></div>
					  <div class="col-sm-1 text-center"><i>to</i></div>
				      <div class="col-sm-2"><input type="text" name="nama" maxlength="100" value="" class="form-control" required></div></br></br></br>
					  <div class="col-sm-2 "><i>Employer</i></div>
				      <div class="col-sm-5"><input type="text" name="nama" maxlength="100" value="" class="form-control" required></div></br></br></br>
					  <div class="col-sm-2 "><i>Position Held</i></div>
				      <div class="col-sm-5"><input type="text" name="nama" maxlength="100" value="" class="form-control" required></div></br></br></br>
					</div>
					
					<!--
					<div id="inputbahasa1">
					</div>
					</br></br></br></br></br></br></br>
					<div class="col-sm-6"><a href="javascript:addBahasa();"><i>>> Add Language (max. 3)</i></a></div>-->
	
				 <!--button-->	
				 <div class="form-group"> 
				  <div class="col-sm-8">
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
		</form>	  
	</div>
	
 </div>
 
<script language="JavaScript" type="text/JavaScript">
counter = 1;
function addBahasa()
{
counterNext = counter + 1;
if (counter<3) {
 document.getElementById("inputbahasa"+counter).innerHTML = '</br></br></br></br></br></br></br>'
													  +'<div class="col-md-7"><label><b><i>Languages '+counterNext+' : </i></b></label></br>'
													  +'<input type="text" name="nama_bhs[]" maxlength="20" value="" class="form-control" ></br>'
														+'<div class="col-sm-1 text-left"><label><i>Speak</i></label></div>'
														+'<div class="col-sm-3 padding-20">'
														  +'<select name="speaking[]" >'
															+'<option></option>'
															+'<option value="Native">Native</option>'
															+'<option value="Bad">Bad</option>'
															+'<option value="Good">Good</option>'
															+'<option Value="Very Good">Very Good</option>'
														  +'</select>'
														+'</div>'
														+'<div class="col-sm-1 text-right"><label><i>Reading</i></label></div>'
														+'<div class="col-sm-3 padding-20">'
														  +'<select name="reading[]" >'
															+'<option></option>'
															+'<option value="Native">Native</option>'
															+'<option value="Bad">Bad</option>'
															+'<option value="Good">Good</option>'
															+'<option Value="Very Good">Very Good</option>'
														  +'</select>'
														+'</div>'
														+'<div class="col-sm-1 text-right"><label><i>Writing</i></label></div>'
														+'<div class="col-sm-3 padding-20">'
														  +'<select name="writing[]" >'
															+'<option></option>'
															+'<option value="Native">Native</option>'
															+'<option value="Bad">Bad</option>'
															+'<option value="Good">Good</option>'
															+'<option Value="Very Good">Very Good</option>'
														  +'</select>'
														+'</div>'
													+'</div>'
													+'<div id="inputbahasa'+counterNext+'">'
													+'</div>';
}
	counter++;
}

<!-- buat list tahun -->
  var start = 1970;
  var end = new Date().getFullYear();
  var options = "";
  for (i=1; i<=1; i++) {
  options += "<option></option>";		
	for(var year = start ; year <= end; year++){
		options += "<option>"+ year +"</option>";
	}
  }
  document.getElementById("yearpicker1").innerHTML = options;
  
  for (i=1; i<=1; i++) {
  options += "<option></option>";		
	for(var year = start ; year <= end; year++){
		options += "<option>"+ year +"</option>";
	}
  }
  document.getElementById("yearpicker2").innerHTML = options;
  
  for (i=1; i<=1; i++) {
  options += "<option></option>";		
	for(var year = start ; year <= end; year++){
		options += "<option>"+ year +"</option>";
	}
  }
  document.getElementById("yearpicker3").innerHTML = options;
</script>