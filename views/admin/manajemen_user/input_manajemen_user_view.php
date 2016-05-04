<div id="content" class="kontent">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tambah User</h3>
                        <p class="animated fadeInDown">
                          Administrator <span class="fa-angle-right fa"></span> Manajemen User
                        </p>
                    </div>
                  </div>
                </div>
                <form class="form-element" method="post" action="<?php echo base_url() ?>admin/Manajemen_user/proc_input" autocomplete="off" >
                
                  <div class="col-md-11 padding-2">
                    <div class="col-md-20">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Form Pengisian</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-10">                            
                            
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Username</label>
                              <div class="col-sm-4"><input type="text" name="username" maxlength="20" class="form-control" required ></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Password</label>
                              <div class="col-sm-4"><input type="password" maxlength="20" class="form-control" pattern=".{6,}" title="6 atau lebih karakter" id="txtPassword" required ></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Konfirmasi Password</label>
                              <div class="col-sm-4"><input type="password" name="password" maxlength="20" class="form-control" pattern=".{6,}" title="6 atau lebih karakter" id="txtConfirmPassword" required ></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Akses</label>
                                <div class="col-sm-4 padding-20">
                                  <select name="level" class="form-control" required>
                                    <option value="">-- Pilih Akses --</option>
                                    <option value="Admin">Administrator</option>
                                    <option value="User">User</option>
                                  </select>
                                </div>
                            </div>                            
                            <div class="form-group"><label class="col-sm-2 control-label text-right">NIP</label>
                              <div class="col-sm-4"><input type="text" name="nip" maxlength="48" class="form-control" required ></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Email</label>
                              <div class="col-sm-4"><input type="email" name="email" maxlength="48" class="form-control" required ></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right"></label>
                            <?php
                            foreach($id->result_array() as $row);
                            $nextid = $row['max']; $nextid = $nextid+1;
                            ?>
                              <div class="col-sm-4"><input type="hidden" name="id_user_login" maxlength="20" class="form-control" value="<?php echo $nextid?>" readonly></div>
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
                                    <input type="submit" class="btn-round btn-default" value="Yakin?" onclick="return Validate()">
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