<div id="content" class="kontent">
	
		<div class="panel box-shadow-none content-header">
          <div class="panel-body">
            <div class="col-md-12">
			  <h3 class="animated fadeInLeft">
			    <span class="icon-globe"></span> Unit Kerja & Satuan Kerja 
			  </h3>
              <p class="animated fadeInDown">
                Laporan Pegawai <span class="fa-angle-right fa"></span> Unit Kerja & Satuan Kerja 
              </p>
            </div>
          </div>
        </div>
		
        <div class="col-md-12">
            <div class="panel">
            <div class="panel-body">
				
				<div class="btn-wrapper"><?php
                echo form_open("admin/Laporan_pegawai_unit/proc_laporan",'class="form-element" autocomplete="off"');
                ?>
                  <div class="col-md-12 padding-2">
                    <div class="col-md-20">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">                                                                     
                            <div class="form-group">
                            <h4>Laporan Unit Kerja & Satuan Kerja :</h4> 
                              <label class="col-sm-6 control-label text-right">Direktorat</label>
                                <div class="col-sm-4 padding-20">
                                  <select name="id_direktorat" class="form-control">
                                  <option value="">- Menurut Direktorat -</option>
                                    <?php

                                      foreach($view_direktorat->result_array() as $row){
                                        if($this->session->userdata('id_direktorat')==$row['id_direktorat']){  
                                    ?>
                                        <option value="<?php echo $row['id_direktorat']; ?>" selected="selected"><?php echo $row['nama_direktorat']; ?></option>
                                    <?php
                                      }else{
                                    ?>
                                        <option value="<?php echo $row['id_direktorat']; ?>"><?php echo $row['nama_direktorat'];?></option>
                                    <?php
                                            }
                                      }
                                    ?>  
                                  </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Jabatan</label>
                                <div class="col-sm-4 padding-20">
                                  <select name="id_jab" class="form-control">
                                  <option value="">- Menurut Jabatan -</option>                                    
                                    <?php
                                      foreach($view_jabatan->result_array() as $row){
                                      if($this->session->userdata('id_jab')==$row['id_jab']){
                                    ?>
                                        <option value="<?php echo $row['id_jab']; ?>" selected="selected"><?php echo $row['nama_jab']; ?></option>
                                    <?php
                                      }else{
                                    ?>
                                        <option value="<?php echo $row['id_jab']; ?>"><?php echo $row['nama_jab'];?></option>
                                    <?php
                                            }
                                      }
                                    ?> 
                                  </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Bidang</label>
                                <div class="col-sm-4 padding-20">
                                  <select name="id_bid" class="form-control">
                                  <option value="">- Menurut Bidang -</option> 
                                   <?php
                                      foreach($view_bidang->result_array() as $row){
                                      if($this->session->userdata('id_bid')==$row['id_bid']){
                                    ?>
                                        <option value="<?php echo $row['id_bid']; ?>" selected="selected"><?php echo $row['nama_bid']; ?></option>
                                    <?php
                                      }else{
                                    ?>
                                        <option value="<?php echo $row['id_bid']; ?>"><?php echo $row['nama_bid'];?></option>
                                    <?php
                                            }
                                      }
                                    ?> 
                                  </select> 
                                </div>                             
                              <div class="col-sm-2 padding-20"><button type="submit" class="btn btn-warning"><i class="icon-magnifier"></i> Cari Laporan</button> </div> 
                              </div>                                                                                                  
                            <br>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php echo form_close(); ?>
				</div>
        <!--Memulai Menampilkan data-->
        <?php
        if (!empty($view_laporan)) { 
        foreach($view_laporan->result_array() as $row);
        if (!empty($row['nip'])) { ?>
        <div class="col-sm-2 padding-20"><a class="btn btn-success" href="<?php echo base_url(); ?>admin/laporan_pegawai_unit/export_laporan"><i class="fa fa-file-excel-o"></i> Export ke Excell</a><br><br></div>
         <?php }}?> 				
        <div class="responsive-table">
                  <table class="table table-striped table-bordered" width="100%" cellspacing="0">                      
                      <thead>                      
                        <tr>
						  <th>No.</th>
                          <th>NIP</th>
                          <th class="col-md-4">Nama</th>
						  <th>Tempat/Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
						  <th>Agama</th>
                          <th>Status Pegawai</th>
                        </tr>                        
                      </thead>
            <?php
            if (!empty($view_laporan)) {
            $no=1;
            foreach($view_laporan->result_array() as $row){
            $nip = $row['nip'];
            $nama = $row['nama'];
            $tempat_lahir = $row['tempat_lahir'];
            $tgl_lahir = $row['tgl_lahir'];
            $jenis_kelamin = $row['jenis_kelamin'];
            $agama = $row['agama'];
            $nama_status = $row['nama_status'];
             
            echo "<tr>
                  <td class='mid'>$no</td>
                   <td class='mid'>$nip</td>
                  <td class='mid'>$nama</td>
                  <td class='mid'>$tempat_lahir , ".date('d-m-Y',strtotime($tgl_lahir)); echo "</td>
                  <td class='mid'>$jenis_kelamin</td>
                  <td class='mid'>$agama</td>
                  <td class='mid'>$nama_status</td>               
                </tr>";
            $no++;
            }}
            ?>
                      
				          </table>
				</div>
			</div>
			</div>	
		</div>
	</div>