<div id="content">
  
    <div class="panel box-shadow-none content-header">
          <div class="panel-body">
            <div class="col-md-12">
        <h3 class="animated fadeInLeft">
          <span class="fa fa-wrench"></span> Pengaturan Akun 
        </h3>
              <p class="animated fadeInDown">
                User  <span class="fa-angle-right fa"></span> Username & Password 
              </p>
            </div>
          </div>
        </div>
    
    
        <div class="col-md-10">
          <div class="panel">
            <div class="panel-body">
              <ul id="tabs-demo4" class="nav nav-tabs nav-tabs-v3" role="tablist">
                <li role="presentation" class="active">
                  <a href="#tabs-demo4-area1" id="tabs-demo4-1" role="tab" data-toggle="tab" aria-expanded="true">Pengaturan Password</a>
                </li>
                <li role="presentation" class="">
                  <a href="#tabs-demo4-area2" role="tab" id="tabs-demo4-2" data-toggle="tab" aria-expanded="false">Pengaturan Username</a>
                </li>
                </ul>
                <div id="tabsDemo4Content" class="tab-content tab-content-v3">
                  <!--Tab Data Pegawai-->

                   <div role="tabpanel" class="tab-pane fade active in" id="tabs-demo4-area1" aria-labelledby="tabs-demo4-area1">

                   <form class="form-element" method="post" action="<?php echo base_url() ?>admin/Pengaturan_akun/proc_edit_password" autocomplete="off" >       
                          <div class="form-group"><label class="col-sm-3 control-label text-right">Username</label>
                              <div class="col-sm-4"><input style="cursor:no-drop" type="text" name="username" maxlength="20" class="form-control" value="<?php echo $username?>" readonly></div>
                          </div>
                          <br><br><br>
                          <div class="form-group"><label class="col-sm-3 control-label text-right">Password Lama</label>
                              <div class="col-sm-4"><input type="password" name="password" maxlength="20" class="form-control" required></div>
                          </div>
                          <br><br>
                          <div class="form-group"><label class="col-sm-3 control-label text-right">Password Baru</label>
                              <div class="col-sm-4"><input type="password" id="txtPassword" maxlength="20" class="form-control" pattern=".{6,}" title="6 atau lebih karakter" required></div>
                          </div>
                          <br><br>
                          <div class="form-group"><label class="col-sm-3 control-label text-right">Konfirmasi Password Baru</label>
                              <div class="col-sm-4"><input type="password" id="txtConfirmPassword" name="passwordbaru" maxlength="20" class="form-control" pattern=".{6,}" title="6 atau lebih karakter"></div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-4"><input  type="hidden" name="id_user_login" maxlength="20" class="form-control" value="<?php echo $id_user_login ?>" readonly></div>
                          </div>
                          <br><br><br>
                          <div class="form-group">
                          <div class="col-sm-8">
                          <div class="col-sm-4 right">
                              <input type="reset" class="btn-flip btn btn-round btn-default" value="Hapus Data">
                              </div>
                              <div class="col-sm-5 right">
                              <button class="btn-flip btn btn-round btn-default">
                                <div class="flip">
                                  <div class="side">
                                    Simpan Data
                                  </div>
                                  <div class="side back">
                                    <input type="submit" class="btn-round btn-default" value="Yakin?" onclick="return Validate()">
                                  </div>
                                </div>
                                <span class="icon"></span>
                              </button>  
                              </div>
                              </div>                           
                          </div>
                   </form>                          
                  </div>
                  
                  <div role="tabpanel" class="tab-pane fade" id="tabs-demo4-area2" aria-labelledby="tabs-demo4-area2">
                    <form class="form-element" method="post" action="<?php echo base_url() ?>admin/Pengaturan_akun/proc_edit_username" autocomplete="off" > 
                          <div class="form-group"><label class="col-sm-3 control-label text-right">Username</label>
                              <div class="col-sm-4"><input type="text" name="username" maxlength="20" class="form-control" value="<?php echo $username?>"></div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-4"><input  type="hidden" name="id_user_login" maxlength="20" class="form-control" value="<?php echo $id_user_login ?>" readonly></div>
                          </div>
                          <br><br><br><br>
                          <div class="form-group">
                          <div class="col-sm-8">
                          <div class="col-sm-4 right">
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
                    </form>
                  </div>
                  
                </div>
            </div>
          </div>  
        </div>
      
    
  </div>
