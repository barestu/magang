<div class="kontent" id="content">
  
    <div class="panel box-shadow-none content-header">
          <div class="panel-body">
            <div class="col-md-12">
        <h3 class="animated fadeInLeft">
          <span class="icon-people"></span> Informasi Akun 
        </h3>
              <p class="animated fadeInDown">
                Administrator <span class="fa-angle-right fa"></span> Manajemen User 
              </p>
            </div>
          </div>
        </div>
    
        <div class="col-md-12">
            <div class="panel">
            <div class="panel-body">        
        <div class="btn-wrapper">
          <a type="button" class="btn btn-danger" href="<?php echo base_url() ?>admin/Manajemen_user/form_input"> 
          <span class="fa icon-plus"></span> Tambah User 
          </a> </br>
        </div>
        
        <div class="responsive-table">
                  <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
              <th>No.</th>                          
                          <th class="col-md-4">Username</th>
              <th>NIP</th>
                          <th>Email</th>
                          <th>Akses</th>              
              <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php
            $no=1;
            foreach($user->result_array() as $row) {
            $username = $row['username'];
            $nip = $row['nip'];
            $email = $row['email']; 
            $level = $row['level'];
            //buat isi tabel Akses nya         
            echo "<tr>
                <td class='mid'>$no</td>
                  <td class='mid'>$username</td>
                  <td class='mid'>$nip</td>
                  <td class='mid'>$email</td>
                  <td class='mid'>$level</td>                              
                <td> 
                <div class='btn-group' role='group'>
                  <button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    <span class='fa fa-pencil-square-o'></span> Aksi
                    <span class='fa fa-angle-down'></span>
                  </button>
                  <ul class='dropdown-menu'>"?>
                  <li><a href="<?php echo base_url(); ?>admin/Manajemen_user/form_edit?id=<?php echo $row['id_user_login']; ?>">Edit</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/Manajemen_user/form_delete/<?php echo $row['id_user_login']; ?>">Delete</a></li>
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
