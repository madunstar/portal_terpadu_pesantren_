<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Admin</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Edit Data Admin
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Mengedit Data Admin","Gagal Mengedit Data Admin") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/adminedit?username=<?php if (isset($usernamelama)) echo $usernamelama; else echo $data['username']; ?>" method="post">
       <a href="<?php echo base_url('admin/datamaster/admin') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">Username</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="username" data-required="true" value="<?php echo $data['username']; ?>" readonly/>
                <input type="hidden" class="form-control" name="usernamelama" data-required="true" value="<?php
                if (isset($usernamelama)) echo $usernamelama; else echo $data['username']; ?>" />
                <?php if(isset($username)) {
                         echo '<label style="color:red;font-size:10px">Username ada yang sama ! Username asal "'.$usernamelama.'"</label>';
                       }
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Password Lama</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="passwordlama" data-required="true"  value="" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Password Baru</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="passwordbaru" data-required="true"  value="" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Konfirmasi Password Baru</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="repasswordbaru" data-required="true"  value="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
      <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
      &nbsp
      <a href="<?php echo base_url() ?>admin/datamaster/adminedit?username=<?php if (isset($usernamelama)) echo $usernamelama;
       else echo $data['username']; ?>" class="btn btn-default btn-s-xs"><i class="fa fa-refresh"></i > Reset</a>
      &nbsp
      <a href="<?php echo base_url('admin/datamaster/admin') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data Admin</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
