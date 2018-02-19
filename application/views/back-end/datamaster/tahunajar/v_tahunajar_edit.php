<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Tahun Ajaran</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Edit Data Tahun Ajaran
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Mengedit Data tahun","Gagal Mengedit Data tahun") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/tahunajaredit?id_tahun=<?php if (isset($id_tahunlama)) echo $id_tahunlama; else echo $data['id_tahun']; ?>" method="post">
       <a href="<?php echo base_url('admin/datamaster/tahunajar') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">ID tahun</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="id_tahun" data-required="true" value="<?php echo $data['id_tahun']; ?>" />
                <input type="hidden" class="form-control" name="id_tahunlama" data-required="true" value="<?php
                if (isset($id_tahunlama)) echo $id_tahunlama; else echo $data['id_tahun']; ?>" />
                <?php if(isset($id_tahun)) {
                         echo '<label style="color:red;font-size:10px">ID tahun ada yang sama ! ID tahun asal "'.$id_tahunlama.'"</label>';
                       }
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">tahun_ajaran</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="tahun_ajaran" data-required="true"  value="<?php echo $data['tahun_ajaran']; ?>" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
      <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
      &nbsp
      <a href="<?php echo base_url() ?>admin/datamaster/tahunajaredit?id_tahun=<?php if (isset($id_tahunlama)) echo $id_tahunlama;
       else echo $data['id_tahun']; ?>" class="btn btn-default btn-s-xs"><i class="fa fa-refresh"></i > Reset</a>
      &nbsp
      <a href="<?php echo base_url('admin/datamaster/tahunajar') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data tahun</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
