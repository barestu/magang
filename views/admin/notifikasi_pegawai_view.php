<div class="kontent" id="content">
  
    <div class="panel box-shadow-none content-header">
          <div class="panel-body">
            <div class="col-md-12">
        <h3 class="animated fadeInLeft">
          <span class="icon-note"></span> Kontrak Pegawai 
        </h3>
              <p class="animated fadeInDown">
                Notifikasi Pegawai <span class="fa-angle-right fa"></span> Kontrak Pegawai 
              </p>
            </div>
          </div>
        </div>
    
        <div class="col-md-12">
            <div class="panel">
            <div class="panel-body">        
 
        <div class="responsive-table">
                  <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
              <th>No.</th>                          
                          <th>NIP</th>
                          <th>No.Kontrak</th>
              <th class="col-md-4">Nama</th>
                          <th>Status Pegawai</th>
                          <th>Berakhir Kontrak</th>              
              <th>Jatuh Tempo</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php
            $no=1;
            foreach($kontrak_tempo->result_array() as $row) {
            $nip = $row['nip'];
            $no_kontrak = $row['no_kontrak'];
            $nama = $row['nama'];
            $nama_status = $row['nama_status'];            
            $akhir_kontrak = $row['berakhir_kontrak'];
            $selisih = $row['selisih'];
            //buat isi tabel Akses nya ?>        
            <tr>
                <td class='mid'><?php echo $no; ?></td>
                  <td class='mid'><?php echo $nip; ?></td>
                  <td class='mid'><?php echo $no_kontrak; ?></td>
                  <td class='mid'><?php echo $nama; ?></td>
                  <td class='mid'><?php echo $nama_status; ?></td>
                  <td class='mid'><?php echo date('d-m-Y',strtotime($akhir_kontrak)); ?></td>
                  <td class='mid'><?php echo $selisih; ?> hari lagi</td>                              
                <td> 
                <div class='btn-group' role='group'>
                  <button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    <span class='fa fa-pencil-square-o'></span> Aksi
                    <span class='fa fa-angle-down'></span>
                  </button>
                  <ul class='dropdown-menu'>
                  <li><a href='<?php echo base_url()?>admin/pegawai_pkwt/edit?id=<?php echo $row['id_peg']?>'>Edit</a></li>            
                  </ul>
                </div>
                </td>
            </tr>
            <?php    
            $no++;
            }?>
          </table>
        </div>
      </div>
      </div>  
    </div>
  </div>
  <!--end: Content  -->
