<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Admin</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Input Data Admin
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Menambahkan Data Admin","Gagal Menambahkan Data Admin") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/admintambah" method="post">
       <a href="<?php echo base_url('admin/datamaster/admin') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">Role Admin</label>
              <div class="col-lg-8">
                <select class="form-control"  name="kode_role_admin" id="kode_role_admin" data-required="true">
                  <option value="" disabled <?php if (set_value('kode_role_admin')=="") echo "selected" ?>>Pilih Role Admin</option>
                  <?php 
                    foreach($kode_role_admin->result_array() as $row) {
                      echo "<option value='".$row['kode_role']."' ".(set_value('kode_role_admin')==$row['kode_role']?"selected":"").">".$row['nama_role']."</option>";
                    }
                  ?> 
                </select> 
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Username</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="username" data-required="true" value="<?php echo set_value('username'); ?>" />
                <?php if(isset($username)) {
                         echo '<label style="color:red;font-size:10px">Username sudah ada !</label>';
                       }
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Password</label>
              <div class="col-lg-8">
                <input type="password" class="form-control"  name="password" data-required="true"  value="<?php echo set_value('password'); ?>"/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Konfirmasi Password</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="repassword" data-required="true"  value="<?php echo set_value('repassword'); ?>"/>
                <?php if(isset($repassword)) {
                         echo '<label style="color:red;font-size:10px">Konfirmasi password tidak cocok !</label>';
                       }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
        <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
        &nbsp
        <a href="<?php echo base_url('admin/datamaster/admin') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data Admin</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
