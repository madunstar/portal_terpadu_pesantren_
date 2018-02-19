<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Pengaturan</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">

          <?php echo $this->session->flashdata('response'); ?>
          <?php echo validation_errors(); ?>
          <section class="panel">
            <header class="panel-heading bg-dark">
              <b>Pengaturan dasar</b>
            </header>
            <?php $att_form = array('class'=>'form-horizontal','data-validate'=>'parsley','id'=>'pengaturan');
            echo form_open('admin/Pendaftaran/edit_pengaturan',$att_form); ?>

            <div class="panel-body">
              <div class="form-group">
                <label class="control-label col-sm-2">Pendaftaran Aktif</label>
                <div class="col-sm-1">
                  <label class="switch">
                      <input type="radio" name="aktif" value="1" <?php echo ($tb_pengaturan_pendaftaran['pendaftaran_aktif'] == 1 ? 'checked' : null);?>>
                      <span></span>
                    </label>
                </div>
                <label class="control-label col-sm-2">Pendaftaran Tidak Aktif</label>
                <div class="col-sm-1">
                  <label class="switch">
                      <input type="radio" name="aktif" value="0" <?php echo ($tb_pengaturan_pendaftaran['pendaftaran_aktif'] == 0 ? 'checked' : null);?>>
                      <span></span>
                    </label>
                </div>

              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group ">

                      <label class="col-sm-2 control-label" for="input-id-1">Tahun Ajaran</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="tahun_ajaran">
                          <?php foreach ($datatahun->result_array() as $tahun) {?>
                            <option value= "<?php echo $tahun['id_tahun']?>" <?php if ($tahun['id_tahun']==$tb_pengaturan_pendaftaran['tahun_ajaran'])  echo "selected" ?>> <?php echo $tahun['tahun_ajaran']?> </option>
                        <?php  } ?>
                      </select>
                      </div>
                    </div>
                      <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group col-sm-12">

                      <button type="submit" data-loading-text="Menyimpan..." class="btn btn-success pull-right" name="button">Simpan</button>

                    </div>

            </div>

            <?php echo form_close(); ?>



                </section>

                <section class="panel">
                  <header class="panel-heading bg-dark">
                    <b>Pengaturan Akun Pendaftar</b>
                  </header>
                  <div class="panel-body">
                    <section class="panel panel-default pos-rlt clearfix">

                    <ul class="nav">
                      <li>
                        <a href="#" class="panel-toggle"><button type="button" class="btn btn-danger" name="button">Reset Password Akun Pendaftar</button></a>
                      </li>
                    </ul>
                  <div class="panel-body clearfix collapse">
                    <div class="dropdown m-r">
                      <div class="table-responsive">
                        <table class="table table-striped m-b-none" id="datatable">
                          <thead>
                            <tr>
                              <th>Aksi</th>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Tahun Ajaran</th>
                              <th>Status Pendaftaran</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              foreach ($tb_akun_pendaftar->result_array() as $row){
                                echo "
                                  <tr>
                                    <td>
                                    <button class='btn btn-warning btn-xs' data-toggle='modal' data-target='#".$row['id_biodata']."' title='Edit'><i class='fa fa-edit'></i></button>
                                    </td>
                                    <td>".$row['nama_lengkap']."</td>
                                    <td>".$row['email_pendaftar']."</td>
                                    <td>".$row['tahun_ajaran']."</td>
                                    <td>".$row['status_pendaftaran']."</td>
                                  </tr>

                                  <div class='modal' id='".$row['id_biodata']."' tabindex='-1' data-validate='parsley'>
                                  <form class='form-horizontal' role='form' data-validate='parsley' action='". base_url()."admin/pendaftaran/editsandi?email_pendaftar=". $row['email_pendaftar']."' method='post'>
                                    <div class='modal-dialog'>
                                     <div class='modal-content'>
                                       <div class='modal-header bg-warning'>
                                         <h4 class='modal-title'>Ubah Kata Sandi Pendaftar</h4>
                                       </div>
                                       <div class='modal-body'>

                                        <div class='form-group'>
                                        <label class='control-label'>Kata Sandi</label>
                                        <input type='password' name='sandi' class='form-control parsley-validated' data-required='true' value='".$row['kata_sandi']."'></input>

                                        </div>


                                       </div>
                                       <div class='modal-footer'>
                                            <button type='submit' class='btn btn-sm btn-success'>Ubah Password</button>
                                            <button class='btn btn-secondary btn-sm' data-dismiss='modal'>Batal</button>
                                         </div>
                                       </div>
                                     </div>
                                     </form>
                                    </div>

                                ";
                              }
                            ?>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    </div>

                  </div>
                </section>
                  </div>




                      </section>
                </div>


      </div>

    </section>
  </section>
</section>
